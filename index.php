<?php get_header(); ?>
<main id="content">

  <div class="body__wrapper">

	<!--Buy Tickets-->
	<div class="tickets-button">
		<a href="/tickets">
			<h3>Buy Tickets Online</h3>
			<p>(Tickets also available at the Box Office)</p>
		</a>
	</div>

	<!--Video-->
	<div class="video-responsive">
	<div class="video-container">
	  <iframe width="100%" height="700" src="https://www.youtube.com/embed/cP28lbBz-3Q?autoplay=1&controls=0&playlist=cP28lbBz-3Q&showinfo=0&autohide=1&loop=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	</div>


	<!--Haunt Description-->
	<div class="description__container">
	  <div class="description__title">
	  <h1 class="description__banner">
		  Grim Trails is on the move in 2022 to Tom Sawyer Park!
		  <br><br>
		  Grim Trails is building our largest haunted attraction to date. We are going from 4 acres to 20 acres, 
		  and will now be located at <a href="https://goo.gl/maps/euuepqihDtuw3ejV8" target="_blank"><br>2600 Freys Hill Rd<br>Louisville, KY 40241<br></a> in Tom Sawyer Park.
		</h1>
		<br><br>
		<h1>
		  Grim Trails Haunted Attraction plunges you deep into the dark,
		  twisted, and spooky world of fairy-tales and folklore.
		  <!-- <br><br>
		  Over 92,000 square feet of outdoor terror! -->
		</h1>
	  </div>
	  <div class="description__text">
		Venture into the lair of the elusive Yeti, explore Bluebeard’s
		murderous manor, and journey to Transylvania to catch a glimpse of
		Count Dracula himself. Our 3/4 of a mile-long haunted trail is not for
		the faint of heart! Grim Trails is a Louisville Halloween Top Haunt
		six years running, in addition to being ranked among Kentucky’s
		premier haunted houses and is a must-see attraction in the Jefferson
		County area.
	  </div>
	</div>

	<!--Event Schedule Blocks-->
	<div class="schedule__container">
	  <div class="schedule__column schedule__mobile">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1_homepage.png" class="schedule__image img-fluid" />
	  </div>
	  <div class="schedule__column">
		<div class="schedule__text">
		  <div class="schedule__subtitle">2022 EVENT SCHEDULE</div>
	  <p>We are opening on September 23rd, and running every Friday and Saturday night until October 29th</p>
		  <!-- Open Dusk to 12:30AM <br />Fridays and Saturdays starting on
		  October 2nd
		  <p>Tickets are <span>$20.00</span> per person.</p> -->
		</div>

		<div class="tickets-button">
		<a href="/tickets">
			<h3>Buy Tickets Online</h3>
			<p>(Tickets also available at the Box Office)</p>
		</a>
	</div>
		<div class="schedule__video">
		  <iframe width="100%" height="315" src="https://www.youtube.com/embed/ANrp4kdGuhA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	  </div>
	  <div class="schedule__column schedule__column-right">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1_homepage.png" class="schedule__image img-fluid" />
	  </div>
	</div>

	<!--Tour Info-->
	<div class="tour__container">
	  <h3 class="tour__info">
		  Want to see the Haunted Trail without the scares? 
	  </h3>
	  <h4 class="tour__description">  
		  We offer behind-the-scenes tours all month.
		  Admission is $10 per person. Please call <a href="tel:502-594-7624" target="_blank">502-594-7624</a> to schedule an appointment, or for more information.
	  </h4>
	</div>

	<!--Map-->
	<div class="map__container">
	  <iframe src="https://www.google.com/maps/d/embed?mid=1q0bMNj8vJKeLI3YxUI7-tqP0_vZrOYY&ehbc=2E312F" width="100%" height="450" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<?php get_footer(); ?>
