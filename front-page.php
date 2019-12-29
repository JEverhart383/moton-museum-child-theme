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
        <h2 class="text-moton-eggplant border-bottom-moton-eggplant mb-5">Visiting The Museum</h2>
        <h3 class="mt-3">Extended Holiday Hours</h3>
        <p>Here is some text regarding hours</p>
        <div class="row mt-3">
          <div class="col-lg-6">
            <p>Open Everyday</p>
            <p>Museum Address</p>
          </div>
          <div class="col-lg-6">
            <p>Admission is free passes are required</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-12">
        <h2 class="text-moton-eggplant border-bottom-moton-eggplant mb-3">About The Museum</h2>
        <p>Here is a paragraph of about text regarding the museum</p>
        <a href="" class="btn btn-primary">Learn More</a>
        <a href="" class="btn btn-primary">Plan Your Visit</a>
        <a href="" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  
  <!-- <div class="container-fluid cta-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        <h3>CTA</h3>
        </div>
      </div>
    </div>
  </div> -->

</div><!-- #full-width-page-wrapper -->
<div class="container-fluid cta-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        <h3>CTA</h3>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
