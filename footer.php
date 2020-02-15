<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info text-center">
						<p class="text-center">
							<img src="/wp-content/themes/moton-museum-child-theme/images/RRMM_Logo_Eggplant.png">
						</p>
						<p class="text-moton-eggplant">900 Griffin Blvd. Farmville, VA 23901 | 434.315.8775 | info@motonmuseum.org &nbsp; &nbsp;
							<i class="fa fa-twitter   footer-social text-moton-eggplant"></i>&nbsp;
							<i class="fa fa-facebook  footer-social text-moton-eggplant"></i>&nbsp;
							<i class="fa fa-instagram footer-social text-moton-eggplant"></i>&nbsp;
							<i class="fa fa-google    footer-social text-moton-eggplant"></i>&nbsp;
						</p>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

