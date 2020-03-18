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
$event_page_query = new WP_Query(array(
  'post_type' => 'page',
  'pagename' => 'events'
));
wp_reset_postdata();
$events_id = $event_page_query->posts[0]->ID;
$child_page_query = new WP_Query(array(
  'post_type' => 'page',
  'posts_per_page' => -1,
  'post_parent' => $events_id ,
  'order_by' => 'menu_order',
  'order' => 'ASC'
));
?>
<?php if ($child_page_query->have_posts()):?>
<div class="container mb-5 child-card-container">
  <div class="row">
  <?php while($child_page_query->have_posts()): $child_page_query->the_post(); ?>
    <div class="col-lg-4 col-md-6">
        <div class="card mt-3">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="" class="card-img-top mh-225">
          <div class="card-body">
            <h5 class="card-title"><?php echo get_the_title();?></h5>
            <p class="card-text"><?php echo get_the_excerpt();?></p>
          </div>
        </div>
    </div>
  <?php endwhile; ?>
  </div>
</div>
<?php endif; wp_reset_postdata(); ?>
<?php 
  include_once get_stylesheet_directory() . '/partials/configurable-cta.php';
?>
<?php
get_footer();
?>