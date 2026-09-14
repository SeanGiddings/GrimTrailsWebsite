# Synthetic Monitoring Gap: 504s Masked by Cache — Summary & Next Steps

**Date:** August 5, 2026

## The problem

A New Relic synthetic monitor reported 200s on a site that was actually intermittently returning 504 Gateway Timeout errors to real users. Our monitoring contact confirmed the monitor itself was getting 200 responses — the likely cause is a caching layer (CDN, reverse proxy, or WordPress cache plugin) serving a stored 200 response to the monitor's request instead of hitting the origin, so the monitor never saw the actual error.

## Why it happened / how to fix it

- **Root cause:** the monitor's request pattern (same static URL, every run) is a guaranteed cache hit. A synthetic ping is just an HTTP GET — if curl would get a cached page, so does the monitor.
- **Fix:** force a cache miss on every check, either by:
  - Adding a unique cache-busting query parameter per request (e.g., `?nr_check={timestamp}`), or
  - Adding `Cache-Control: no-cache` / `Pragma: no-cache` request headers (only works if the CDN is configured to honor client cache-control headers — not guaranteed).
  - Most reliable: configure the CDN/cache layer to bypass cache on a specific header or path, and point the monitor there.
- **Testing the fix:** verified with curl before touching New Relic — hit the base URL to confirm a cache HIT (via `CF-Cache-Status`, `Age`, or similar header), then hit it with a fresh query param each time to confirm MISS. Confirmed Cloudflare's default cache key includes the full query string, so this approach works without CDN config changes on Cloudflare specifically.
- **Important limitation:** New Relic **ping monitors can't do this** — they hit a static URL with no custom headers or per-run query params. Only **scripted monitors** (which cost extra per check) support the header/query-param logic needed to force a cache bypass. This is why "we have plenty of ping monitor allowance" and "ping monitors didn't catch this" are both true — it's a capability gap, not a quota gap.

## Cheaper / alternative options considered

- **StatusCake** — flat-fee plans (~$67–80/mo covers 300 monitors) support custom headers, so the cache-bypass fix works even on non-Enterprise tiers. Better fit for monitoring 200 sites than New Relic's per-check model.
- **Better Stack, Site24x7, Uptime.com** — similar flat-fee-by-monitor-count tools, same general fit.
- **Cloudflare Health Checks** (Load Balancing add-on, ~$5/mo per 2 origins) — checks the origin directly rather than through the cached/proxied path, which sidesteps the cache-masking problem entirely. Available on paid Cloudflare plans, not Enterprise-gated.
- **Cloudflare "Origin Error Rate" notification** — would alert on real 5xx traffic at the edge (no synthetic checks needed at all), but confirmed this is **Enterprise-plan only** — not available unless we're already on Cloudflare Enterprise.

## Build-our-own option (Lambda / Azure Functions / ADO pipeline)

Technically straightforward and nearly free to run:

- A script (Python + `requests`) with a cache-busting query param and no-cache headers is ~30 lines.
- AWS Lambda and Azure Functions both give a **permanent** free tier of 1M requests/month + 400,000 GB-seconds/month — checking all 200 sites from one scheduled function every 1–5 minutes stays well within that, effectively $0 in compute cost.
- An Azure DevOps scheduled pipeline is arguably the cheapest path organizationally, since it reuses infrastructure/minutes we already have rather than standing up new cloud resources.

**The pushback (worth weighing before committing to build):** the compute is free, but reliable monitoring is more than the curl loop. Things SaaS tools quietly handle that we'd own ourselves if we build it:

- **Multi-region checks** — a single Lambda/Function runs from one region, so we couldn't distinguish "site is actually down" from "our one region had a network blip" without deploying to multiple regions.
- **Alert routing and de-dup** — retry-before-alert logic (so one blip doesn't page someone at 3am) and Slack/Teams/email/PagerDuty integration all have to be built and maintained.
- **History, dashboards, status pages** — New Relic/StatusCake give us uptime %, trend charts, and a public status page for free. DIY means building and storing that ourselves.
- **Monitoring the monitor** — if our Lambda or the AWS/Azure account has an issue, nothing tells us monitoring itself went dark. That blind spot doesn't exist with a third-party SaaS tool.

None of this rules out building it — it just means we'd be trading a subscription fee for ongoing engineering time, and someone has to own that script long-term.

## Agreed immediate next steps

1. **Check what Cloudflare already offers** — evaluate Cloudflare Health Checks (Load Balancing add-on) as an origin-direct check that avoids the cache-masking problem without adding a new vendor.
2. **Turn on Cloudflare Logpush** — push edge logs (including real response codes served to users) to get visibility into actual 5xx rates at the edge, without needing the Enterprise-only Origin Error Rate alert.
3. **If Cloudflare-native options don't fully cover it, build our own monitor** using AWS Lambda or an Azure DevOps pipeline (technologies we already have access to) — going in aware of the multi-region, alerting, dashboard, and "who owns this" tradeoffs above, not just the low compute cost.

Other cleanup items worth doing regardless: contact Pantheon support to activate the bundled free synthetic checks, and audit New Relic user seats to move dashboard-only viewers to the free Basic tier.
