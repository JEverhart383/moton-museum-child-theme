<div class="container-fluid cta-container mt-5" style="background-image: linear-gradient(
  rgba(0, 0, 0, 0.85),
  rgba(0, 0, 0, 0.85)
), url(<?php the_field('cta_background_image', 'option'); ?>); background-size: cover; background-repeat: no-repeat;">
<div class="container">
<div class="row">
  <div class="col-sm-12 mt-5">
  <h3><?php the_field('cta_headline', 'option'); ?></h3>
  <p><?php the_field('cta_text', 'option'); ?></p>
  <p>
    <a href="<?php the_field('cta_primary_button_link', 'option'); ?>" class="btn btn-warning">
      <?php the_field('cta_primary_button_text', 'option'); ?>
    </a> 
    <a href="<?php the_field('cta_secondary_button_link', 'option'); ?>" class="btn btn-success">
      <?php the_field('cta_secondary_button_text', 'option'); ?>
    </a>
    </p>

  </div>
</div>
</div>
</div>