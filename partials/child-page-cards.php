<?php

$child_page_query = new WP_Query(array(
  'post_type' => 'page',
  'posts_per_page' => -1,
  'post_parent' => $post ? $post->ID : $post_id_to_query ,
  'order_by' => 'menu_order',
  'order' => 'ASC'
));
?>
<?php if ($child_page_query->have_posts()):?>
<div class="container mb-5 child-card-container">
  <div class="row">
  <?php while($child_page_query->have_posts()): $child_page_query->the_post(); ?>
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="card mt-3">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="" class="card-img-top mh-225">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo get_the_title();?></h5>
            <?php echo get_the_excerpt();?>
          </div>
        </div>
    </div>
  <?php endwhile; ?>
  </div>
</div>
<?php endif; wp_reset_postdata(); ?>