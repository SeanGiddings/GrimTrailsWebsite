<?php /* Template Name: Schedule*/ ?>

<?php get_header(); ?>

<div class="body__wrapper">
	<!-- Sentinel to track scroll position -->
	<div id="tickets-sentinel"></div>
	<!--Buy Tickets-->
	<div id="homepage-tickets-button" class="tickets-button">
	<a target="_blank" href="https://grimtrails26.fearticket.com/">
		<h3>Buy Tickets Online</h3>
		<p>(Also available at the Box Office)</p>
	</a>
	</div>

	<!--Haunt Description-->
	<div class="tertpage__container">
		<div class="tertpage__title">
			<h1>
				2026 Event Schedule
			</h1>
		</div>
		<div class="schedulepage__container">

				<h3 class="schedulepage__subtitle">Tickets available on-site at haunt during open hours.</h3>
				<h3 class="schedulepage__subtitle">Purchase tickets online 24/7!</h3>
				<!-- <div class="schedulepage__image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2026-calendar-wide.webp" class="schedule__image img-fluid" />
				</div>  -->
				<div class="schedulepage__dates">
					<table class="schedule-table">
						<thead>
							<tr>
								<th>Friday</th>
								<th>Saturday</th>
								<th>Sunday</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Sept 18</td>
								<td>Sept 19</td>
								<td>&mdash;</td>
							</tr>
							<tr>
								<td>Sept 25</td>
								<td>Sept 26</td>
								<td>&mdash;</td>
							</tr>
							<tr>
								<td>Oct 2</td>
								<td>Oct 3</td>
								<td>&mdash;</td>
							</tr>
							<tr>
								<td>Oct 9</td>
								<td>Oct 10</td>
								<td>&mdash;</td>
							</tr>
							<tr>
								<td>Oct 16</td>
								<td>Oct 17</td>
								<td>Oct 18</td>
							</tr>
							<tr>
								<td>Oct 23</td>
								<td>Oct 24</td>
								<td>Oct 25</td>
							</tr>
							<tr>
								<td>Oct 30</td>
								<td>Oct 31 (Halloween)</td>
								<td>&mdash;</td>
							</tr>
						</tbody>
					</table>
					<p class="schedule-hours-note">Friday &amp; Saturday: 8:00 PM &ndash; 12:00 AM &nbsp;|&nbsp; Sunday: 8:00 PM &ndash; 10:00 PM</p>
				</div>
				<div class="map__container">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12527.500407536967!2d-85.552195!3d38.282388!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8869a190dd2db409%3A0x2a883abdca7cee7c!2sGrim%20Trails%20Haunted%20Attraction!5e0!3m2!1sen!2sus!4v1720624291768!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
		</div>
				<?php get_footer(); ?>
