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
    <h1 class="display-4">Accessibility Template</h1>
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
          <p>These are the only combination of buttons that meet contrast ratio requirements</p>
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>

          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-12">
          <h3>Outline Buttons</h4>
          <p>These are the only combination of buttons that meet contrast ratio requirements</p>
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-12">
          <h3>Dark Background Tests</h4>
          <p>None of the Moton colors meet contrast requirements here, either</p>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header">Header</div>
              <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Meets Contrast Requirements</p>
                <p class="card-text text-moton-eggplant">Does Not Meet Contrast Requirements</p>
                <p class="card-text text-moton-orange">Does Not Meet Contrast Requirements</p>
                <p class="card-text text-moton-blue">Does Not Contrast Requirements</p>
                <p class="card-text text-moton-green">Does Not Meet Contrast Requirements</p>
              </div>
            </div>
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
              <div class="card-header">Header</div>
              <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Meets Contrast Requirements</p>
                <p class="card-text text-moton-eggplant">Does Not Meet Contrast Requirements</p>
                <p class="card-text text-moton-orange">Does Not Meet Contrast Requirements</p>
                <p class="card-text text-moton-blue">Meets Contrast Requirements</p>
                <p class="card-text text-moton-green">Does Not Meet Contrast Requirements</p>
              </div>
            </div>
            <div class="card text-white bg-moton-eggplant mb-3" style="max-width: 18rem;">
              <div class="card-header">Header</div>
              <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Meets Contrast Requirements</p>
                <p class="card-text text-moton-orange">Does Not Meet Contrast Requirements</p>
                <p class="card-text text-moton-blue">Meets Contrast Requirements</p>
                <p class="card-text text-moton-green">Does Not Meet Contrast Requirements</p>
              </div>
            </div>
          </div>
        </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
