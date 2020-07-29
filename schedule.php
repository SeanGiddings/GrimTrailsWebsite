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

        <h2 class="schedule__title">Hours: Dusk to 12:30am<h2>
                <h3 class="schedule__subtitle">Tickets available on site during open hours.</h3>
                <h3 class="schedule__subtitle">Purchase tickets online 24/7!</h3>

                <div class="schedule__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.png" class="schedule__image img-fluid" />
                </div>
                <?php get_footer(); ?>