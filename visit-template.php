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
              <h2 class="moton-header"> <a id="hours-and-admissions">Hours and Admissions</a></h2>
              <h5><i class="mt-3 fa fa-clock-o text-moton-orange"></i> Guest Hours</h5>
              <p><?php the_field('guest_hours'); ?></p>
              <h5><i class="mt-3 fa fa-briefcase text-moton-orange"></i> Office Hours</h5>
              <p><?php the_field('office_hours'); ?></p>
              <h5><i class="mt-3 fa fa-ticket text-moton-orange"></i> Admission</h5>
              <p><?php the_field('admission'); ?></p>
              <h5><i class="mt-3 fa fa-group text-moton-orange"></i> Group Tours</h5>
              <p>
              <?php the_field('group_tours'); ?>
              </p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
              <h2 class="moton-header"><a id="directions">Getting Here</a></h2>
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
              <h2 class="moton-header mb-3"><a id="explore-galleries">Explore Galleries</a></h2>
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="gallery-carousel">
                  <?php 
                  $gallery_query = new WP_Query(array(
                    'post_type' => 'gallery', 
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'order_by' => 'menu_order',
                    'order' => 'ASC'
                  ));
                  $gallery_index = 0;
                  while($gallery_query->have_posts()): $gallery_query->the_post();
                  ?>
                  <?php 
                    $carousel_class = "carousel-item";
                    if ($gallery_index == 0) {
                      $carousel_class = "carousel-item active";
                    }
                    $gallery_index++;
                  ?>
                  <div class="<?php echo $carousel_class; ?>" style="background-image: linear-gradient(
                      rgba(0, 0, 0, 0.75),
                      rgba(0, 0, 0, 0.75)
                    ), url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover; background-repeat: no-repeat;">
                    <div class="carousel-caption d-block">
                      <h5><?php the_title(); ?></h5>
                      <p><?php the_content(); ?></p>
                    </div>
                  </div>
                  <?php 
                  endwhile;
                  wp_reset_postdata();
                  ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
            <h2 class="moton-header"><a id="civil-rights-tours">Civil Right Tours</a></h2>
                <div class="card w-100 mt-5">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 pt-3">
                        <img src="<?php echo get_stylesheet_directory_uri(). '/images/FD-CRWT-Logo.png'; ?>" class="img-fluid" >
                      </div>
                      <div class="col-lg-9 col-md-9 pt-3">
                        <h5 class="card-title">Farmville Civil Rights Walking Tour</h5>
                        <p>
                          Make the Moton Museum part of a walking tour. Walk to 17 places of civil rights significance in Farmville.
                        </p>
                        <p>
                          This walking tour guides you to sites in downtown Farmville significant to this history between 1951 and 1964. The two-mile route is designed to begin and end at the Moton Museum and takes you along Main Street, High Street, and Griffin Boulevard, but you can begin and end the tour at any point. Downtown Farmville has changed dramatically since the 1960s. We encourage you to explore its shops and cultural attractions as you engage with its fascinating past.
                          Sites on the tour are identified by a Civil Rights Walking Tour logo on the sidewalk.
                        </p>
                        <a href="https://civilrightstour.motonmuseum.org/" target="_blank" class="btn btn-primary btn-block"><i class="fa fa-location-arrow"></i> Go Explore</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card w-100 mt-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 pt-3">
                        <img src="<?php echo get_stylesheet_directory_uri(). '/images/U.S.-Civil-Rights-Trail.jpg'; ?>" class="img-fluid" >
                      </div>
                      <div class="col-lg-9 col-md-9 pt-3">
                        <h5 class="card-title">U.S Civil Rights Trail</h5>
                        <p>
                          The Moton Museum is a featured stop of the U.S. Civil Rights Trail. According to the U.S. Civil Rights Trail,
                        </p>
                        <p>
                          "The fight for American civil rights spanned decades, cities and states – from Topeka, Kansas, to Memphis, Tennessee, from Atlanta, Georgia, to Selma and Birmingham, and all the way to Washington, D.C. Chart the course of the Civil Rights Movement through the Civil Rights Trail that begins with the site of school integration and takes you to the scene of Bloody Sunday and finally the Supreme Court of the United States."
                        </p>
                        <a href="https://civilrightstrail.com/" target="_blank" class="btn btn-primary btn-block"> Learn More</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card w-100 mt-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 pt-3">
                        <img src="<?php echo get_stylesheet_directory_uri(). '/images/Civil-Rights-in-Education-Heritage-Trail.jpg'; ?>" class="img-fluid" >
                      </div>
                      <div class="col-lg-9 col-md-9 pt-3">
                        <h5 class="card-title">Civil Rights in Education Heritage Trail </h5>
                        <p>
                          The Moton Museum is a featured stop of the Civil Rights in Education Heritage Trail. According to the Civil Rights in Education Heritage Trail,
                        </p>
                        <p>
                          "Among the many ways Virginia has led the nation, its education heritage is worthy of deeper understanding. The free public education system our country now enjoys has its roots here in this region, where the right to equal education for all was the subject of challenge, debate and courageous acts. The sleepy back roads of these rural counties were an unexpected place for inspired activism – and this trail tells the poignant and often explosive story."
                        </p>
                        <a href="https://vacrossroads.com/virginiacptcats/history/?id=94&custom_term=Civil%20Rights%20Trail" target="_blank" class="btn btn-primary btn-block"> Learn More</a>
                      </div>
                    </div>
                  </div>
                </div>


            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
            <h2 class="moton-header"><a id="rules-and-policies">Museum Rules & Policies</h2>
            <?php the_field('policies'); ?>
            </div>
          </div>
        <?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php 
  include_once get_stylesheet_directory() . '/partials/configurable-cta.php';
?>
<?php get_footer(); ?>
