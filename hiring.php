<?php /* Template Name: Hiring*/ ?>

<?php get_header(); ?>

  <div class="body__wrapper">

	  <!--Buy Tickets-->
	  <div class="tickets-button">
		<a target="_blank" href="https://grimtrails.fearticket.com/frontapp">
			<h3>Buy Tickets Online</h3>
			<p>(Also available at the Box Office)</p>
		</a>
	</div>

	  <!--Tertpage Title-->
	  <div class="tertpage__container">
		<div class="tertpage__title">
		  <h1>
			Hiring Inquiry
		  </h1>
		</div>

		<div class="tertpage__text">
		  <p>
          We are currently accepting applications. Please fill out the form below to get started.
		  </p>
		</div>

		<!--Form-->
        <div class="form__container">
        <?php echo do_shortcode('[wpforms id="158" title="false"]'); ?>
  </div>

	  <div class="map__container">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12527.500407536967!2d-85.552195!3d38.282388!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8869a190dd2db409%3A0x2a883abdca7cee7c!2sGrim%20Trails%20Haunted%20Attraction!5e0!3m2!1sen!2sus!4v1720624291768!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>

	  <?php get_footer(); ?>
