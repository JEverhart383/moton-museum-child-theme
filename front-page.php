<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="jumbotron jumbotron-fluid homepage-hero" style="background-image: linear-gradient(
      rgba(0, 0, 0, 0.75),
      rgba(0, 0, 0, 0.75)
    ), url(http://www.motonmuseum.org/wp/wp/wp-content/uploads/2010/03/Free-School-opening-day-1963.jpg); background-size: cover; background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-4">The Eyes of the World Are On Us.</h1>
        <p class="lead">Farmville, Virginia's former Robert Russa Moton High School, now a National Historical Landmark and museum, is the student birthplace of America's Civil Rights Revolution.
          <br>
          <br>
          <a href="" class="btn btn-outline-white">Learn More</a>
          <a href="" class="btn btn-outline-white">Plan Your Visit</a>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">
    <div class="row">
      <div class="col-lg-12 text-center text-moton-eggplant">
          <h4>Explore More</h4>
          <i class="fa fa-chevron-down fa-2x"></i>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-12">
        <h2 class="moton-header mb-5">Visiting The Museum</h2>
        <?php if (get_field('display_hours_alert', 'option') == True): ?>
          <div class="alert alert-primary" role="alert">
            <h3 class="mt-3"><?php the_field('hours_alert_heading', 'option'); ?></h3>
            <p><?php the_field('hours_alert_text', 'option'); ?></p>
          </div>
        <?php endif; ?>
        <div class="row mt-3">
          <div class="col-lg-6">
            <h5><i class="fa fa-clock-o text-moton-orange"></i> Noon-4:00 p.m., Monday-Saturday</h5>
            <h5 class="mt-3"><i class="fa fa-map-marker text-moton-orange"></i>        Museum Address</h5>
            <div class="icon-offset">
              <address>
                900 Griffin Blvd
                <br> 
                Farmville, VA 23901
              </address>
              <p>(434) 315-8775 </p>
            </div>
          </div>
          <div class="col-lg-6">
            <h5><i class="fa fa-ticket text-moton-orange"></i> Admission is free</h5>
            <div class="icon-offset">
              <p>Admission is free for the general public. To schedule a guided tour for a group of 5 or more, we ask that you contact museum staff in advance using the information available at the link below.</p>
              <a class="btn btn-primary" href="/visit">Plan Your Visit</a>
            </div>
          </div>
        </div>
        <div class="row mt-3">
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-12">
        <h2 class="moton-header mb-3">About The Museum</h2>
        <blockquote class="blockquote">
        <p>[The 1951 Moton Student Strike] marked the start of the modern civil rights movement . . . [and] forever changed the landscape of American education.</p>
        <footer class="blockquote-footer">Don Baker, <cite title="The Washington Post Magazine">The Washington Post Magazine</cite></footer>
        </blockquote>
        <p>Farmville, Virginia’s former Robert Russa Moton High School, now a National Historic Landmark and museum, is the birthplace of America’s student-led civil rights revolution.</p>
        <a href="" class="btn btn-primary">Mission</a>
        <a href="" class="btn btn-primary">Board</a>
        <a href="" class="btn btn-primary">Council</a>
      </div>
    </div>
</div><!-- #full-width-page-wrapper -->
<?php 
$give_page = get_page_by_template('give-template.php')[0];
$learn_page = get_page_by_template('learn-template.php')[0];
$events_page = get_page_by_template('events-template.php')[0];
?>
<div class="container-fluid alternating-tile-section mt-5">
    <div class="row" style="background-image: url(<?php echo get_the_post_thumbnail_url($learn_page->ID); ?>); background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-6"></div>
      <div class="col-lg-6 content-tile text-center">
        <h3 class="text-moton-eggplant mt-5"><?php echo $learn_page->post_title; ?></h3>
        <p><?php echo $learn_page->post_content; ?></p>
        <a href="<?php echo get_the_permalink($learn_page->ID); ?>" class="btn btn-primary">Learn More</a>
      </div>
  </div>
  <div class="row" style="background-image: url(<?php echo get_the_post_thumbnail_url($events_page->ID); ?>); background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-6 content-tile text-center">
        <h3 class="text-moton-eggplant mt-5"><?php echo $events_page->post_title; ?></h3>
        <p><?php echo $events_page->post_content; ?></p>
        <a href="<?php echo get_the_permalink($events_page->ID); ?>" class="btn btn-primary">Learn More</a>
      </div>
      <div class="col-lg-6"></div>
  </div>
  <div class="row" style="background-image: url(<?php echo get_the_post_thumbnail_url($give_page->ID); ?>); background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-6"></div>
      <div class="col-lg-6 content-tile text-center">
        <h3 class="text-moton-eggplant mt-5"><?php echo $give_page->post_title; ?></h3>
        <p><?php echo $give_page->post_content; ?></p>
        <a href="<?php echo get_the_permalink($give_page->ID); ?>" class="btn btn-primary mb-3">Learn More</a>
      </div>
  </div>
</div>
<?php 
  include_once get_stylesheet_directory() . '/partials/configurable-cta.php';
?>
<?php endwhile; // end of the loop. ?>
<div class="container-fluid text-center">
  <img src="<?php echo get_stylesheet_directory_uri() . '/images/motonmuseum_affiliate_banner.jpg'; ?>" alt="" class="fluid mt-3 mb-3">
</div>
<?php get_footer(); ?>
