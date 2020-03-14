<?php if (get_field('display_hours_alert', 'option') == True): ?>
  <div class="alert alert-primary" role="alert">
    <h3 class="mt-3"><?php the_field('hours_alert_heading', 'option'); ?></h3>
    <p><?php the_field('hours_alert_text', 'option'); ?></p>
  </div>
<?php endif; ?>