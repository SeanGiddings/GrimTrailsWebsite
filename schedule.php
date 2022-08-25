<?php /* Template Name: Schedule*/ ?>

<?php get_header(); ?>

<div class="body__wrapper">

	<!--Buy Tickets-->
	<div class="tickets-button">
		<a href="/tickets">
			<h3>Buy Tickets Online</h3>
			<p>(Also available at the Box Office)</p>
		</a>
	</div>

	<!--Haunt Description-->
	<div class="tertpage__container">
		<div class="tertpage__title">
			<h1>
				2022 Event Schedule
			</h1>
		</div>
		<div class="schedulepage__container">

		<h2 class="schedulepage__title">Hours: Dusk to 12:30am<h2>
		<h3 class="schedulepage__subtitle">Fridays and Saturdays starting on
		  September 23rd.</h3>
				<h3 class="schedulepage__subtitle">Tickets available on site during open hours.</h3>
				<h3 class="schedulepage__subtitle">Purchase tickets online 24/7!</h3>

				<!-- <div class="schedulepage__image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1_homepage.png" class="schedule__image img-fluid" />
				</div> -->
				<div class="map__container">
	  <iframe src="https://www.google.com/maps/d/embed?mid=1q0bMNj8vJKeLI3YxUI7-tqP0_vZrOYY&ehbc=2E312F" width="100%" height="450" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>			
		</div>
				<?php get_footer(); ?>
