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
              <h3>Nav Bars</h3>
              <p>For nav bars, we have two potential variants. First is the white text on Moton brown that you see first. </p>
              <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-5">
                <div class="container">
                    <!-- Your site title as branding in the menu -->
                    <a href="http://localhost:8888/" class="navbar-brand custom-logo-link" rel="home" itemprop="url"><img width="173" height="108" src="http://localhost:8888/wp-content/uploads/2019/11/RRMM_Logo_2c.png" class="img-fluid" alt="RRMM_Logo_2c" itemprop="logo"></a><!-- end custom logo -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <!-- The WordPress Menu goes here -->
                  <div id="navbarNavDropdown" class="collapse navbar-collapse">
                    <ul id="main-menu" class="navbar-nav ml-auto">
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-67 current_page_item active menu-item-69 nav-item"><a title="Accessibility Template" href="http://localhost:8888/accessibility-template/" class="nav-link">Accessibility Template</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-12 nav-item"><a title="Home" href="http://localhost:8888/" class="nav-link">Home</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62 nav-item"><a title="Listings" href="http://localhost:8888/listings/" class="nav-link">Listings</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item"><a title="Meet Staff" href="http://localhost:8888/meet-Staff/" class="nav-link">Meet Staff</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55 nav-item"><a title="Blog" href="http://localhost:8888/blog/" class="nav-link">Blog</a></li>
                    </ul>
                  </div>
                </div><!-- .container -->
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-primary moton-nav mt-5">
                <div class="container">
                    <!-- Your site title as branding in the menu -->
                    <a href="http://localhost:8888/" class="navbar-brand custom-logo-link" rel="home" itemprop="url"><img width="173" height="108" src="http://localhost:8888/wp-content/themes/moton-museum-child-theme/images/RRMM_Logo_2c_brown.png" class="img-fluid" alt="RRMM_Logo_2c" itemprop="logo"></a><!-- end custom logo -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <!-- The WordPress Menu goes here -->
                  <div id="navbarNavDropdown" class="collapse navbar-collapse">
                    <ul id="main-menu" class="navbar-nav ml-auto">
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-67 current_page_item active menu-item-69 nav-item"><a title="Accessibility Template" href="http://localhost:8888/accessibility-template/" class="nav-link">Accessibility Template</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-12 nav-item"><a title="Home" href="http://localhost:8888/" class="nav-link">Home</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62 nav-item"><a title="Listings" href="http://localhost:8888/listings/" class="nav-link">Listings</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item"><a title="Meet Staff" href="http://localhost:8888/meet-Staff/" class="nav-link">Meet Staff</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55 nav-item"><a title="Blog" href="http://localhost:8888/blog/" class="nav-link">Blog</a></li>
                    </ul>
                  </div>
                </div><!-- .container -->
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-primary moton-nav-black mt-5 mb-5">
                <div class="container">
                    <!-- Your site title as branding in the menu -->
                    <a href="http://localhost:8888/" class="navbar-brand custom-logo-link" rel="home" itemprop="url"><img width="173" height="108" src="http://localhost:8888/wp-content/uploads/2019/11/RRMM_Logo_2c.png" class="img-fluid" alt="RRMM_Logo_2c" itemprop="logo"></a><!-- end custom logo -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <!-- The WordPress Menu goes here -->
                  <div id="navbarNavDropdown" class="collapse navbar-collapse">
                    <ul id="main-menu" class="navbar-nav ml-auto">
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-67 current_page_item active menu-item-69 nav-item"><a title="Accessibility Template" href="http://localhost:8888/accessibility-template/" class="nav-link">Accessibility Template</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-12 nav-item"><a title="Home" href="http://localhost:8888/" class="nav-link">Home</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62 nav-item"><a title="Listings" href="http://localhost:8888/listings/" class="nav-link">Listings</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item"><a title="Meet Staff" href="http://localhost:8888/meet-Staff/" class="nav-link">Meet Staff</a></li>
                      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55 nav-item"><a title="Blog" href="http://localhost:8888/blog/" class="nav-link">Blog</a></li>
                    </ul>
                  </div>
                </div><!-- .container -->
              </nav>
            </div>
          </div>
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
