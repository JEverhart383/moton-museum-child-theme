<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$post_id_to_query = 128;
?>
<div class="jumbotron jumbotron-fluid template-hero" style="background-image: linear-gradient(
  rgba(0, 0, 0, 0.65),
  rgba(0, 0, 0, 0.65)
), url(<?php echo get_the_post_thumbnail_url($post_id_to_query); ?>); background-size: cover; background-repeat: no-repeat;">
<div class="container">
    <h1 class="display-4">Events</h1>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      Some Info About Reserving Moton Here
    </div>
  </div>
</div>

<?php
echo tribe( Template_Bootstrap::class )->get_view_html();
?>
  <?php 
    include_once get_stylesheet_directory() . '/partials/child-page-cards.php';
  ?>
  <?php 
    include_once get_stylesheet_directory() . '/partials/configurable-cta.php';
  ?>
<?php
get_footer();
?>