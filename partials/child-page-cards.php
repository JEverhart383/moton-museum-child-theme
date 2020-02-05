<?php

$child_page_query = new WP_Query(array(
  'post_type' => 'page',
  'posts_per_page' => -1,
  'post_parent' => $post ? $post->ID : $post_id_to_query ,
  'order_by' => 'menu_order',
  'order' => 'ASC'
));
$child_page_index = 0;
?>
<?php if ($child_page_query->have_posts()):?>
<?php while($child_page_query->have_posts()): $child_page_query->the_post(); ?>
<?php
  $alternating_tile_class = "container-fluid alternating-tile-section";
  $text_box_class = "col-lg-6 content-tile text-center";
  $offset_class = "col-lg-6"; 
  if ($child_page_index == 0 ) {
    $alternating_tile_class .= " mt-5";
  }
  $remainder = $child_page_index % 2;
  if ($child_page_index % 2 !== 0 ) {
    $text_box_class .= " mr-lg-auto";
    $offset_class .= " offset-lg-6";
  }
?>
<div class="<?php echo $alternating_tile_class; ?>">
    <div class="row" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>); background-size: cover; background-repeat: no-repeat;">
    <?php ?>   
    <div class="<?php echo $offset_class; ?>"></div>
      <div class="<?php echo $text_box_class; ?>">
        <h3 class="text-moton-eggplant mt-5"><?php the_title(); ?></h3>
        <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">Learn More</a>
      </div>
  </div>
</div>
<?php $child_page_index++; ?>
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>