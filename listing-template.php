<?php
/**
 * Template Name: All Listings
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
<div class="jumbotron jumbotron-fluid listing-hero">
  <div class="container">
    <h1 class="display-4">All Listings</h1>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
        <div class="row">
        <?php
          $args = array(
            'post_type' => 'listing',
            'posts_per_page' => -1
          );
          $all_listings_query = new WP_Query($args);
        
        ?>
        <?php if($all_listings_query->have_posts()): ?>
        <?php while( $all_listings_query->have_posts() ) :$all_listings_query->the_post(); ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card">
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title mb-3"><?php the_title();?></h5>
              <h6 class="card-subtitle mb-3 text-muted">$<?php the_field('price') ?>&nbsp; <?php echo get_mls_status_badge(get_the_ID()); ?></h6>
              <p class="card-text mb-3"><i class="fa fa-bed"></i> <?php echo the_field('beds'); ?> Beds | <i class="fa fa-bath"></i> <?php echo the_field('baths'); ?> Baths | <i class="fa fa-home"></i> <?php echo the_field('square_feet'); ?> Sq. Ft.</p>
              <p class="card-text"><?php echo get_the_excerpt();?></p>

              <!-- <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">View details</a> -->
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary"><i class="fa fa-photo"></i> Photos</button>
                <button type="button" class="btn btn-outline-primary"><i class="fa fa-video-camera"></i> Video</button>
                <button type="button" class="btn btn-outline-primary"><i class="fa fa-map-signs"></i> Tour</button>
                <button type="button" class="btn btn-outline-primary"><i class="fa fa-map-marker"></i> Map</button>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; // end of the loop. ?>
        <?php endif; ?>
        </div> <!-- End card group -->
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
