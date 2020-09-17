<?php /* Template Name: Covid*/ ?>

<?php get_header(); ?>

<div class="body__wrapper">

      <!--Buy Tickets-->
      <div class="tickets-button">
      <a href="/tickets">Buy Tickets Online</a>
    </div>

      <!--Tertpage Title-->
      <div class="tertpage__container">
        <div class="tertpage__title">
          <h1>
            Covid-19 Information
          </h1>
        </div>

        <div class="tertpage__text">
          <p>
            Please see image below. For any additional questions, please contact us and we'll help you with anything you need.
          </p>
        </div>

        <img id="covid" class="covid__image img-fluid pb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/covid.jpg" alt="Special COVID rules image" aria-label="COVID rules image" />
          
</div>

<?php get_footer(); ?>