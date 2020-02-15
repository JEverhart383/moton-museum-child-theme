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
<div class="container">
    <div class="row mt-5">
      <div class="alert alert-primary">
        <h2 class="moton-header mb-3">Rent The Museum</h2>
        <div class="row">
          <div class="col-lg-6">
            <p>Host your event at Virginia’s civil rights National Historic Landmark.</p>
            <p>The Moton Museum offers a fully restored historic space that is available to rent for private, public and non-profit functions.</p>
            <p>Our multi-purpose auditorium can accommodate up to 200 guests theatre style, and 100 guests banquet style, with a variety of A/V set-up options.</p>
            <a href="/events/rental" class="btn btn-primary">Learn About Renting</a>
          </div>
          <div class="col-lg-6">
            <img src="<?php echo get_stylesheet_directory_uri() . '/images/Moton-Auditorium.png'; ?>" alt="" class="fluid">
          </div>
        </div>
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