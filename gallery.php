<?php /* Template Name: Gallery*/ ?>

<?php get_header(); ?>

  <div class="body__wrapper">

		 <!--Buy Tickets-->
		 <div class="tickets-button">
		<a href="/tickets">
			<h3>Buy Tickets Online</h3>
			<p>(Also available at the Box Office)</p>
		</a>
	</div>
	  <!--Gallery-->
	  <div class="tertpage__container">

		<div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" data-target="#carouselExample" data-slide-to="0">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" data-target="#carouselExample" data-slide-to="1">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/3.png" data-target="#carouselExample" data-slide-to="2">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/4.jpg" data-target="#carouselExample" data-slide-to="3">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/5.jpg" data-target="#carouselExample" data-slide-to="3">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/6.jpg" data-target="#carouselExample" data-slide-to="3">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/7.jpg" data-target="#carouselExample" data-slide-to="3">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/8.jpg" data-target="#carouselExample" data-slide-to="3">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/9.jpg" data-target="#carouselExample" data-slide-to="3">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/10.jpg" data-target="#carouselExample" data-slide-to="3">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
	<img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/11.jpg" data-target="#carouselExample" data-slide-to="3">
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">×</span>
		</button>
	  </div>
	  <div class="modal-body">
		
	  <div id="carouselExample" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/3.png">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/4.jpg">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/5.jpg">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/6.jpg">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/7.jpg">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/8.jpg">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/9.jpg">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/10.jpg">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/11.jpg">
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	  </div>

	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	  </div>
	</div>
  </div>
</div>

	  </div>
</div>

	  <?php get_footer(); ?>
