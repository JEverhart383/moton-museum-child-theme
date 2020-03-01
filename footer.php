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
						<p class="text-moton-eggplant">900 Griffin Blvd. Farmville, VA 23901 | Museum Hours 12PM - 4PM Mon. - Sat. | <a href="tel: 1-434-315-8775">434.315.8775</a> | <a href="mailto:info@motonmuseum.org">info@motonmuseum.org</a> &nbsp; &nbsp;
						</p>
						<p>	
							<a href="https://twitter.com/motonmuseum?lang=en"><i class="fa fa-twitter   footer-social text-moton-eggplant"></i></a>&nbsp;
							<a href="https://www.facebook.com/motonmuseum/"><i class="fa fa-facebook  footer-social text-moton-eggplant"></i></a>&nbsp;
							<a href="https://www.instagram.com/explore/locations/261118163/robert-russa-moton-museum"><i class="fa fa-instagram footer-social text-moton-eggplant"></i></a>&nbsp;
							<a href=""><i class="fa fa-google    footer-social text-moton-eggplant"></i></a>&nbsp;
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

