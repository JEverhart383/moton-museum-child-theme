<?php
/**
 * Template Name: Single Listing 
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
<div class="jumbotron jumbotron-fluid listing-hero" style="background-image: linear-gradient(
      rgba(0, 0, 0, 0.55),
      rgba(0, 0, 0, 0.55)
    ), url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover; background-repeat: no-repeat;">
  <div class="container">
    <h1 class="display-4"><?php the_title(); ?></h1>
    <h2 class="display-5">$<?php echo the_field('price'); ?></h2>
    <p class="lead"><i class="fa fa-bed"></i> <?php echo the_field('beds'); ?> Beds</p>
    <p class="lead"><i class="fa fa-bath"></i> <?php echo the_field('baths'); ?> Baths</p>
    <p class="lead"><i class="fa fa-home"></i> <?php echo the_field('square_feet'); ?> Square Feet</p>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-8 content-area" id="primary">

				<main class="site-main" id="main" role="main">
        <?php the_content(); ?>
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-pictures-tab" data-toggle="tab" href="#pictures" role="tab" aria-controls="nav-home" aria-selected="true">Pictures</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#video" role="tab" aria-controls="nav-profile" aria-selected="false">Video</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#tour" role="tab" aria-controls="nav-contact" aria-selected="false">Tour</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#map" role="tab" aria-controls="nav-contact" aria-selected="false">Map</a>
          </div>
        </nav>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="pictures" role="tabpanel" aria-labelledby="home-tab">Pictures</div>
          <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="profile-tab">Video</div>
          <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="contact-tab">Tour</div>
          <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="contact-tab">Map</div>
        </div>

				</main><!-- #main -->

      </div><!-- #primary -->
      <div class="col-md-4 secondary">
        <h3>Listing Agent</h3>
        <div class="card">
        <img src="https://www.sovaliving.com/wp-content/uploads/2016/02/navona_head_600.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Navona Hart <span class="text-muted small font-weight-light">Owner/Broker</span></h5>
            <p class="card-text">
              Navona's bio describes her ability to sell homes quickly and for the best price
            </p>
            <a href=""><i class="fa fa-envelope"></i> navona@ahomewithhart.com</a>
            <br/>
            <a href=""><i class="fa fa-phone"></i> (434) 999-999</a>
            <br/>
            <br/>
            <a class="btn btn-primary btn-block">Contact Navona</a>
          </div>
        </div>
      </div>
      <!-- .secondary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
