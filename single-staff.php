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
<div class="jumbotron jumbotron-fluid bg-triangles-purple-bg-1">
  <div class="container">
    <h1 class="display-4">Moton Museum Staff: <?php the_title(); ?> </h1>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">
      <?php $staff = assemble_staff_member_from_post($post); ?>
				<main class="site-main" id="main" role="main">
          <div class="row">
            <div class="col-lg-4 mt-3">
              <img src="<?php echo $staff['headshot']['url']; ?>" alt="">
            </div>
            <div class="col-lg-8 mt-3">
              <h2><?php echo $staff['full_name']?></h2>
              <hr>
              <h4 class="mb-2 text-muted"><?php echo $staff['position']?></h4>
              <?php if($staff['moton_resident_scholar'] === TRUE):?>
              <span class="badge badge-pill badge-primary">Moton Resident Scholar</span>
              <?php endif;?>
              <p class="card-text">
              <?php if ($staff['phone']): ?>
                <i class="fa fa-phone"></i> <?php echo $staff['phone']?><br>
              <?php endif; ?>
              <a href="mailto:<?php echo $staff['email']?>"><i class="fa fa-envelope"></i> <?php echo $staff['email']?></a>
              </p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-12">
              <h3>Biography</h3>
              <hr>
              <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
