<?php
/**
 * Template Name: Accessibility Template
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
    <h1 class="display-4">Button Test</h1>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
        <div class="row">
          <div class="col-lg-12">
          <h3>Regular Buttons</h4>
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <h3>Outline Buttons</h4>
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          </div>
        </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
