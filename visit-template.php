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
<div class="jumbotron jumbotron-fluid template-hero bg-triangles-purple-bg-1">
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
              <?php 
                include_once get_stylesheet_directory() . '/partials/hours-alert.php';
              ?>
              <h2 class="moton-header"> <a id="hours-and-admissions">Hours and Admissions</a></h2>
              <h5><i class="mt-3 fa fa-clock-o text-moton-orange"></i> Guest Hours</h5>
              <p><?php the_field('guest_hours'); ?></p>
              <h5><i class="mt-3 fa fa-briefcase text-moton-orange"></i> Office Hours</h5>
              <p><?php the_field('office_hours'); ?></p>
              <h5><i class="mt-3 fa fa-ticket text-moton-orange"></i> Admission</h5>
              <p><?php the_field('admission'); ?></p>
              <h5><i class="mt-3 fa fa-group text-moton-orange"></i> School & Group Tours</h5>
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
                  <a class="btn btn-primary btn-block mt-3" href="https://www.google.com/maps/dir//Robert+Russa+Moton+Museum,+900+Griffin+Blvd,+Farmville,+VA+23901/@37.2914659,-78.3977747,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89b24ec53d7fe503:0xac305f04720cc7e5!2m2!1d-78.3976322!2d37.291384">Get Directions</a>
                  <h5><i class="mt-3 fa fa-car text-moton-orange"></i> Parking</h5>
                  <p>There are limited parking spaces onsite at The Moton Museum. Overflow parking can be found across the street from our museum at the Southgate Shopping Center. Visitors are encouraged to use the spaces that run parallel to Griffin Boulevard. Please reference our <a href="https://drive.google.com/open?id=1Wxz4HT0RSRDw6LLzBeEa4XdJP9rp4G6S&usp=sharing" target="_blank">parking map</a> for details.</p>
                  <p class="mt-3 text-small">Looking for places to stay, restaurants to try and fun activities to make your trip to Farmville memorable? Check out <a href="https://visitfarmville.com/">visitfarmville.com.</a></p>
                </div>
                <div class="col-lg-6">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=robert%20russa%20&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://periodic-table-of-elements.net"></a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div>

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
        <?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

  </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<div class="container-fluid bg-subtle-swoosh ">
    <div class="container pb-5">
      <div class="row">
        <div class="col">
        <h2 class="moton-header mt-5"><a id="rules-and-policies">Museum Rules & Policies</a></h2>
        <?php the_field('policy_intro'); ?>
        <div class="accordion" id="policyAccordian">
          <div class="card">
            <div class="card-header" id="headingOne">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#policyCollapse" aria-expanded="true" aria-controls="collapseOne">
                  Click to Read Policies
                </button>
            </div>
            <div id="policyCollapse" class="collapse" aria-labelledby="headingOne" data-parent="#policyAccordian">
              <div class="card-body">
                  <?php the_field('policies'); ?>
              </div>
            </div>
          </div>

        </div>
        </div>
      </div>
    </div>
  </div>
<?php 
  include_once get_stylesheet_directory() . '/partials/configurable-cta.php';
?>
<?php get_footer(); ?>
