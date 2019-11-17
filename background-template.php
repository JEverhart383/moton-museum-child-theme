<?php
/**
 * Template Name: Background Template
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
    <h1 class="display-4">Background Template</h1>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

			<main class="site-main" id="main" role="main">
      <p>The point of these background textures is two-fold. First, since the Moton colors are not the most accessible, we can use CSS background images to incorporate them into CTA blocks throughout the site. This should reinforce the Moton brand, while also keeping things interesting and most importantly readable. Second, these background sections are hand drawn to evoke nostalgia and should contrast well with the imagery we will display throughout the site.</p>
      <h2 class="mt-5">Moton Green Backgrounds</h2>
        <div class="jumbotron jumbotron-fluid bg-image bg-crosshatch-moton-green mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-image bg-triangles-moton-green mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-image bg-horizontal-lines-moton-green mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <h2 class="mt-5">Moton Blue Backgrounds</h2>
        <div class="jumbotron jumbotron-fluid bg-image bg-crosshatch-moton-blue mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-image bg-triangles-moton-blue mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-image bg-horizontal-lines-moton-blue mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <h2 class="mt-5">Moton Orange Backgrounds</h2>
        <div class="jumbotron jumbotron-fluid bg-image bg-crosshatch-moton-orange mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-image bg-triangles-moton-orange mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-image bg-horizontal-lines-moton-orange mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <h2 class="mt-5">Eggplant Backgrounds</h2>
        <div class="jumbotron jumbotron-fluid bg-image bg-crosshatch-moton-eggplant mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-image bg-triangles-moton-eggplant mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-image bg-horizontal-lines-moton-eggplant mt-5">
          <div class="container">
            <h1 class="display-4">Background Title</h1>
            <div class="bg-image-content">
              <p>Here is some additional content that may or may not contain an image or other CTAs</p>
            </div>
          </div>
        </div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
