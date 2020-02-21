<?php
/**
 * Template Name: About Template
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

	<div class="container-fluid" id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 content-area" id="primary">
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
  <?php 
      include_once get_stylesheet_directory() . '/partials/child-page-cards.php';
    ?>
  <?php endwhile; // end of the loop. ?>
  <div class="container-fluid text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>The Moton Museum is proudly affiliated with the Virginia Association of Museums, the American Association for State and Local History, The American Alliance of Museums, and the Association of African American Museums.</p>
        </div>
      </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri() . '/images/motonmuseum_affiliate_banner.jpg'; ?>" alt="" class="fluid mt-3 mb-3">
  </div>
  <?php 
    include_once get_stylesheet_directory() . '/partials/configurable-cta.php';
  ?>
</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
