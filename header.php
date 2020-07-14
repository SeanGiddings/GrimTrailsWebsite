<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title>
    Grim Trails Haunted House and Attractions | Louisville KY's Premiere
    Haunted Experience
  </title>
  <meta name="description" content="Grim Trails" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header id="header">

    <!--NavBar-->

    <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Reviews
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_facebook.png" alt="facebook icon" class="footer__facebook socialmedia__icon" /></a>
        <a href="https://twitter.com/grimtrails?lang=en" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_twitter.png" alt="twitter icon" class="footer__twitter socialmedia__icon" />
        </a>
        <a href="https://www.youtube.com/channel/UCiBMbJ1NF6Kax5rUuvlSY3g" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_youtube.png" alt="youtube icon" class="footer__youtube socialmedia__icon" />
        </a>
      </div>
    </nav>

      <div id="branding">
        <div id="site-title">
          <?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
            echo '<h1>';
          } ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
          <?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
            echo '</h1>';
          } ?>
        </div>
        <div id="site-description"><?php bloginfo('description'); ?></div>
      </div>
      <nav id="menu">
        <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
      </nav>-->

          <!--Logo-->
    <div class="header__container">
      <a class="header__brand img-fluid" href="#">
        <img id="logo" class="header__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logobg.png" alt="Grim Trails Haunted House Logo" aria-label="Grim Trails Haunted House Logo" />
      </a>
    </div>-->

    <!--Announcements Section-->
    <!--
        <div class="Announcement__container">
        <div class="Announcement Text">
          Unfortunately, Grim Trails has been rained out.
        </div>
      </div>
      -->
    </header>
    <div id="container">