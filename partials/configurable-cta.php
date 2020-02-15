<div class="container-fluid cta-container" id="cta-container" style="background-image: linear-gradient(
  rgba(0, 0, 0, 0.65),
  rgba(0, 0, 0, 0.65)
), url(<?php the_field('cta_background_image', 'option'); ?>); background-size: cover; background-repeat: no-repeat;">
<div class="container">
<div class="row">
  <div class="col-sm-12">
  <h2 class="mt-5"><?php the_field('cta_headline', 'option'); ?></h2>
  <p><?php the_field('cta_text', 'option'); ?></p>
  <p>
    <a href="<?php the_field('cta_primary_button_link', 'option'); ?>" class="btn btn-warning">
      <?php the_field('cta_primary_button_text', 'option'); ?>
    </a> 
    <?php if(get_field('display_secondary_button', 'option') == TRUE): ?>
    <a href="<?php the_field('cta_secondary_button_link', 'option'); ?>" class="btn btn-success">
      <?php the_field('cta_secondary_button_text', 'option'); ?>
    </a>
    <?php endif; ?>
    </p>

  </div>
</div>
</div>
</div>