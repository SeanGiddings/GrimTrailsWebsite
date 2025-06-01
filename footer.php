</div>
<footer id="footer">
  <!--Footer-->
<!--
  <div class="covid__container">
	<h2 class="covid__title">
	  IMPORTANT COVID-19 MESSAGE
	</h2>
	<p class="covid__text">
	  Our primarily outdoor event will safely open this year. Due to Covid-19, we are taking extra precautions in the preparation and organization of the Haunt. Please see our <a href="/covid">Covid-19 page</a> for more information.
	</p>
  </div>
-->
  <div class="footer__container">
  <img
		id="footerlogo1"
		class="footer__logo footer__logoleft"
		src="<?php echo get_stylesheet_directory_uri(); ?>/images/footerlogo.png"
		alt="Grim Trails Haunted House Logo"
		aria-label="Grim Trails Haunted House Logo"
	  />
	  <div class="footer__info">
	<div class="footer__addressline">
	  <!-- <div class="footer__address">
		<a href="https://www.google.com/maps/place/Grim+Trails+Haunted+Attraction,+12009+Rehl+Rd,+Louisville,+KY+40299/@38.2008512,-85.5336743,15z/data=!4m2!3m1!1s0x8869a190dd2db409:0x2a883abdca7cee7c" target="_blank">
		  12009 Rehl Rd, Louisville, KY 40299
		</a>
	  </div> -->
	  <div class="footer__phone">
		<a href="tel:502-594-7624" target="_blank">
		  502-594-7624
		</a>
	  </div>
	  <div class="footer__phone">
		Grim Trails Haunted Attraction<br>
		<a href="https://goo.gl/maps/euuepqihDtuw3ejV8" target="_blank">
		  2600 Freys Hill Rd<br>
		  Louisville, KY 40241<br>
		</a>
	  </div>
	  <div class="footer__socialmedia">
			<a href="https://www.facebook.com/GrimTrails/" target="_blank">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_facebook.png" alt="facebook icon" class="footer__facebook socialmedia__icon" /></a>
			<a href="https://www.youtube.com/channel/UCiBMbJ1NF6Kax5rUuvlSY3g" target="_blank">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_youtube.png" alt="youtube icon" class="footer__youtube socialmedia__icon" />
			</a>
			<a href="https://www.instagram.com/grimtrails/?hl=en" target="_blank">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_insta.png" alt="twitter icon" class="footer__twitter socialmedia__icon" />
			</a>
		  </div>
	</div>
	<div class="footer__disclaimer">
          All content copyright Grim Trails Haunted House and Attractions |
          Louisville Kentucky's Scariest Haunted Attractions © <span id="year"></span> • All rights
          reserved.
        </div>
        <script>
          document.getElementById("year").textContent = new Date().getFullYear();
      </script>
</div>
	<img
		id="footerlogo2"
		class="footer__logo footer__logoright"
		src="<?php echo get_stylesheet_directory_uri(); ?>/images/footerlogo.png"
		alt="Grim Trails Haunted House Logo"
		aria-label="Grim Trails Haunted House Logo"
	  />
	<!--
	<div class="footer__subnav">
	  <a href="#">
		Privacy Statement
	  </a>
	  <a href="#">
		Site Map
	  </a>
	</div>
-->
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>-->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const stickyButton = document.getElementById("homepage-tickets-button");
    const sentinel = document.getElementById("tickets-sentinel");

    const observer = new IntersectionObserver(
      ([entry]) => {
        if (!entry.isIntersecting) {
          stickyButton.classList.add("is-stuck");
        } else {
          stickyButton.classList.remove("is-stuck");
        }
      },
      { threshold: 0 }
    );

    observer.observe(sentinel);
  });
</script>


  </body>

  </html>
