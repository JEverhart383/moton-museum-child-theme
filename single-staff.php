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
<div class="jumbotron jumbotron-fluid listing-hero">
  <div class="container">
    <h1 class="display-4">Staff: <?php the_title(); ?> </h1>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo assemble_staff_member_from_post($post)['full_name']; ?></h5>
              <?php echo get_field('position');?>
            </div>
          </div>
        <?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
