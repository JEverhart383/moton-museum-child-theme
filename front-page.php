<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="jumbotron jumbotron-fluid listing-hero" style="background-image: linear-gradient(
      rgba(0, 0, 0, 0.55),
      rgba(0, 0, 0, 0.55)
    ), url(http://www.motonmuseum.org/wp/wp/wp-content/uploads/2010/03/Free-School-opening-day-1963.jpg); background-size: cover; background-repeat: no-repeat;min-height: 500px;"">
  <div class="container-fluid">
    <nav id="hero-menu">
      <ul>
        <li>About</li>
        <li>Visit</li>
        <li>Donate</li>
        <li>Sign-up</li>
      </ul>
    </nav>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">
    <div class="row">
      <div class="col-sm-12">
        <h3>Moton</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h3>Features</h3>
      </div>
    </div>
  </div><!-- #content -->
  <div class="container-fluid cta-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        <h3>CTA</h3>
        </div>
      </div>
    </div>
  </div>

</div><!-- #full-width-page-wrapper -->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
