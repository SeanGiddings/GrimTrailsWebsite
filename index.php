<?php get_header(); ?>
<main id="content">

  <div class="body__wrapper">

    <!--Buy Tickets-->
    <div class="tickets-button">
      <a href="/tickets">Buy Tickets Online</a>
    </div>

    <!--Video-->
    <div class="video-container">
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/cP28lbBz-3Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <!--Haunt Description-->
    <div class="description__container">
      <div class="description__title">
        <h1>
          Grim Trails Haunted Attraction plunges you deep into the dark,
          twisted, and spooky world of fairy-tales and folklore.
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
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.png" class="schedule__image img-fluid" />
      </div>
      <div class="schedule__column">
        <div class="schedule__text">
          <div class="schedule__subtitle">2019 EVENT SCHEDULE</div>
          Open Dusk to 12:30AM <br />Fridays and Saturdays starting on
          September 27th
        </div>
        <div class="tickets-button">
          <a href="/tickets">Buy Tickets Online</a>
        </div>
        <div class="schedule__video">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/ANrp4kdGuhA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="schedule__column schedule__column-right">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.png" class="schedule__image img-fluid" />
      </div>
    </div>

    <!--Map-->
    <div class="map__container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12541.558295415894!2d-85.5336743!3d38.2008512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a883abdca7cee7c!2sGrim%20Trails%20Haunted%20Attraction!5e0!3m2!1sen!2sus!4v1593451822879!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <?php get_footer(); ?>