<?php
/**
 * Template Name: Give Template
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
              <div class="col-lg-6">
                <?php the_content(); ?>
              </div>
              <div class="col-lg-6">
                <div class="card text-white bg-primary mb-5 text-center">
                  <div class="card-body">
                    <h5 class="card-title text-white"><?php the_field('give_cta_heading')?></h5>
                    <p class="w-33">
                      <img src="<?php echo get_stylesheet_directory_uri() . '/images/donation-box.svg'; ?>" alt="">
                    </p>
                    <p class="card-text">
                      <?php the_field('give_cta_content')?>
                      You can give to Moton easily using your debit or credit card to help support our efforts.
                      <br>
                      <a href="<?php the_field('give_cta_button_url')?>" class="btn btn-warning mt-3">
                        <?php the_field('give_cta_button_text')?>
                      </a>
                    </p>
                  </div>
                </div>
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
  <?php 
    include_once get_stylesheet_directory() . '/partials/configurable-cta.php';
  ?>
</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
