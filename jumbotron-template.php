<?php
/**
 * Template Name: Jumbotron Template
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
<div class="jumbotron jumbotron-fluid template-hero" style="background-image: linear-gradient(
  rgba(0, 0, 0, 0.65),
  rgba(0, 0, 0, 0.65)
), url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover; background-repeat: no-repeat;">
<div class="container">
    <h1 class="display-4"><?php the_title(); ?> </h1>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="container-fluid bg-subtle-swoosh" id="content">
    <div class="container">
      <div class="row">
        <div class="offset-md-2 col-md-8 content-area" id="primary">
          <main class="site-main" id="main" role="main">
            <div class="row">
              <div class="col">
                <?php the_content(); ?>
              </div>
            </div>

          </main><!-- #main -->

        </div><!-- #primary -->
      </div><!-- .row end -->
    </div><!-- .container end -->
  </div><!-- #content -->
  <?php endwhile; // end of the loop. ?>
  <?php 
    include_once get_stylesheet_directory() . '/partials/configurable-cta.php';
  ?>
</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
