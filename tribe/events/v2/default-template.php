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
$post_id_to_query = 8161;
?>
<div class="jumbotron jumbotron-fluid template-hero bg-triangles-purple-bg-1">
  <div class="container">
    <h1 class="display-4">Events</h1>
  </div>
</div>
<div class="container" id="events-wrapper">
    <?php
      echo tribe( Template_Bootstrap::class )->get_view_html();
    ?>
</div>

<?php 
  include_once get_stylesheet_directory() . '/partials/child-page-cards.php';
?>
<?php 
  include_once get_stylesheet_directory() . '/partials/configurable-cta.php';
?>
<?php
get_footer();
?>