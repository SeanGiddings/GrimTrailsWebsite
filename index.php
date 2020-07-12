<?php get_header(); ?>
<main id="content">
<body>
    <div class="body__wrapper">
      <!--NavBar-->

      <nav class="navbar navbar-expand-lg navbar-dark">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tickets</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Reviews
              </a>
              <div
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" href="#">Facebook Reviews</a>
                <a class="dropdown-item" href="#">Accolades</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Directions</a>
            </li>
          </ul>
        </div>
        <div class="header__socialmedia">
          <a href="https://www.facebook.com/GrimTrails/" target="_blank">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_facebook.png"
              alt="facebook icon"
              class="footer__facebook socialmedia__icon"
          /></a>
          <a href="https://twitter.com/grimtrails?lang=en" target="_blank">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_twitter.png"
              alt="twitter icon"
              class="footer__twitter socialmedia__icon"
            />
          </a>
          <a
            href="https://www.youtube.com/channel/UCiBMbJ1NF6Kax5rUuvlSY3g"
            target="_blank"
          >
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_youtube.png"
              alt="youtube icon"
              class="footer__youtube socialmedia__icon"
            />
          </a>
        </div>
      </nav>

      <!--Logo-->
      <div class="header__container">
        <a class="header__brand img-fluid" href="#">
          <img
            id="logo"
            class="header__logo"
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/logobg.png"
            alt="Grim Trails Haunted House Logo"
            aria-label="Grim Trails Haunted House Logo"
          />
        </a>
      </div>

      <!--Announcements Section-->
      <!--
        <div class="Announcement__container">
        <div class="Announcement Text">
          Unfortunately, Grim Trails has been rained out.
        </div>
      </div>
      -->

      <!--Buy Tickets-->
      <div class="tickets-button">
        <a href="/tickets">Buy Tickets Online</a>
      </div>

      <!--Video-->
      <iframe
        width="100%"
        height="315"
        src="https://www.youtube.com/embed/cP28lbBz-3Q"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>

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
            <iframe
              width="100%"
              height="315"
              src="https://www.youtube.com/embed/ANrp4kdGuhA"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
        <div class="schedule__column schedule__column-right">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.png" class="schedule__image img-fluid" />
        </div>
      </div>

      <!--Map-->
      <div class="map__container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12541.558295415894!2d-85.5336743!3d38.2008512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a883abdca7cee7c!2sGrim%20Trails%20Haunted%20Attraction!5e0!3m2!1sen!2sus!4v1593451822879!5m2!1sen!2sus"
          width="100%"
          height="450"
          frameborder="0"
          style="border: 0;"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      </div>

      <!--Footer-->

      <div class="footer__container">
        <div class="footer__addressline">
          <div class="footer__address">
            <a
              href="https://www.google.com/maps/place/Grim+Trails+Haunted+Attraction,+12009+Rehl+Rd,+Louisville,+KY+40299/@38.2008512,-85.5336743,15z/data=!4m2!3m1!1s0x8869a190dd2db409:0x2a883abdca7cee7c"
              target="_blank"
            >
              12009 Rehl Rd, Louisville, KY 40299
            </a>
          </div>
          <div class="footer__phone">
            <a href="tel:502-594-7624" target="_blank">
              502-594-7624
            </a>
          </div>
          <div class="footer__socialmedia">
            <a href="https://www.facebook.com/GrimTrails/" target="_blank">
              <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_facebook.png"
                alt="facebook icon"
                class="footer__facebook socialmedia__icon"
            /></a>
            <a href="https://twitter.com/grimtrails?lang=en" target="_blank">
              <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_twitter.png"
                alt="twitter icon"
                class="footer__twitter socialmedia__icon"
              />
            </a>
            <a
              href="https://www.youtube.com/channel/UCiBMbJ1NF6Kax5rUuvlSY3g"
              target="_blank"
            >
              <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_youtube.png"
                alt="youtube icon"
                class="footer__youtube socialmedia__icon"
              />
            </a>
          </div>
        </div>
        <div class="footer__disclaimer">
          All content copyright Grim Trails Haunted House and Attractions |
          Louisville Kentucky's Scariest Haunted Attractions © 2020 • All rights
          reserved.
        </div>
        <div class="footer__subnav">
          <a href="#">
            Privacy Statement
          </a>
          <a href="#">
            Site Map
          </a>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>