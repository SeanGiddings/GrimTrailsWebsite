<?php /* Template Name: Gallery*/ ?>

<?php get_header(); ?>

  <div class="body__wrapper">

		 <!--Buy Tickets-->
		 <div class="tickets-button">
		<a target="_blank" href="https://grimtrails.fearticket.com/frontapp">
			<h3>Buy Tickets Online</h3>
			<p>(Also available at the Box Office)</p>
		</a>
	</div>
	  <!--Gallery-->
	  <div class="instagram-feed-container">
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </div>
</div>

	  <?php get_footer(); ?>
