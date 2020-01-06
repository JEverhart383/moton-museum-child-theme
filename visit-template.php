<?php
/**
 * Template Name: Visit Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="jumbotron jumbotron-fluid listing-hero">
  <div class="container">
    <h1 class="display-4"><?php the_title(); ?> </h1>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
          <div class="row">
            <div class="col">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
              <h2 class="moton-header"> <a href="#hours-and-admissions">Hours and Admissions</a></h2>
              <h5><i class="mt-3 fa fa-clock-o text-moton-orange"></i> Guest Hours</h5>
              <p>Noon-4:00 p.m., Monday-Saturday, and by appointment.</p>
              <h5><i class="mt-3 fa fa-briefcase text-moton-orange"></i> Office Hours</h5>
              <p>9:00 a.m.-4:00 p.m., Monday-Friday, and by appointment.</p>
              <h5><i class="mt-3 fa fa-ticket text-moton-orange"></i> Admission</h5>
              <p>Admission is free for the general public.</p>
              <h5><i class="mt-3 fa fa-group text-moton-orange"></i> Group Tours</h5>
              <p>
                To schedule a guided tour (5+ groups preferably), email info@motonmuseum.org or call 434-315-8775 ext 6 at least ten business days in advance.
                Please also fill out this form so we can better accommodate your group. Click here!
              </p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
              <h2 class="moton-header">Getting Here</h2>
              <div class="row mt-3">
                <div class="col-lg-6">
                  <h5><i class="mt-3 fa fa-map-marker text-moton-orange"></i> Physical Location</h5>
                  <address>900 Griffin Blvd,<br>
                  Farmville, Virginia 23901</address>
                  <a class="btn btn-primary btn-block mt-5" href="https://www.google.com/maps/dir//Robert+Russa+Moton+Museum,+900+Griffin+Blvd,+Farmville,+VA+23901/@37.2914659,-78.3977747,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89b24ec53d7fe503:0xac305f04720cc7e5!2m2!1d-78.3976322!2d37.291384"><i class="fa fa-map-signs"></i> Click Here For Directions</a>
                  <p class="mt-5 text-small">Looking for places to stay, restaurants to try and fun activities to make your trip to Farmville memorable? Check out <a href="visitfarmville.com">visitfarmville.com.</a></p>
                </div>
                <div class="col-lg-6">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=robert%20russa%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://periodic-table-of-elements.net"></a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
            <h2 class="moton-header">Gallery Sneak Peak</h2>
            </div>
          </div>
        <?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
