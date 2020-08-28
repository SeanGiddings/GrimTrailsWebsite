<?php /* Template Name: Schedule*/ ?>

<?php get_header(); ?>

<div class="body__wrapper">

    <!--Buy Tickets-->
    <div class="tickets-button">
        <a href="/tickets">Buy Tickets Online</a>
    </div>

    <!--Haunt Description-->
    <div class="tertpage__container">
        <div class="tertpage__title">
            <h1>
                Event Schedule
            </h1>
        </div>
        <div class="schedulepage__container">

        <h2 class="schedulepage__title">Hours: Dusk to 12:30am<h2>
        <h3 class="schedulepage__subtitle">Fridays and Saturdays starting on
          September 26th.</h3>
                <h3 class="schedulepage__subtitle">Tickets available on site during open hours.</h3>
                <h3 class="schedulepage__subtitle">Purchase tickets online 24/7!</h3>

                <div class="schedulepage__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar2020.png" class="schedule__image img-fluid" />
                </div>
                            
        </div>
                <?php get_footer(); ?>