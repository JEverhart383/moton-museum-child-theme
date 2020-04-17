<?php
  $upcoming_events = moton_get_upcoming_events();
?>

<div class="row mt-5">
  <div class="col-lg-12">
    <h2 class="moton-header mb-3">Upcoming Events</h2>
    <?php if($upcoming_events['featured_events'][0]): ?>
    <div class="row">
      <div class="col-lg-6">
        <div>
          <h4><?php echo $upcoming_events['featured_events'][0]['title']; ?></h4>
          <h5><?php echo $upcoming_events['featured_events'][0]['friendly_date']; ?><br>
          <?php echo $upcoming_events['featured_events'][0]['friendly_time']; ?></h5>
          <p><?php echo $upcoming_events['featured_events'][0]['content']; ?></p>
        </div>
        <a href="<?php echo $upcoming_events['featured_events'][0]['permalink']  ?>" class="btn btn-primary mb-3">Learn More</a>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $upcoming_events['featured_events'][0]['featured_image'] ?>" alt="Moton Museum event image" class="fluid">
      </div>
    </div>
    <?php endif; ?>
    <div class="row child-card-container">
      <?php foreach($upcoming_events['regular_events'] as $event): ?>
      <div class="col-lg-4 mt-3 d-flex align-items-stretch">
       <div class="card">
         <img src="<?php echo $event['featured_image'] ?>" alt="Moton Museum event image" class="card-img-top">
         <div class="card-body d-flex flex-column">
         <h5><?php echo $event['title'] ?></h5>
           <p><?php echo $event['friendly_date']; ?></p>
           <p><?php echo $event['friendly_time']; ?></p>
          <a href="<?php echo $event['permalink']; ?>" class="btn btn-primary btn-block mt-auto">Learn More</a>
          </div>
       </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
