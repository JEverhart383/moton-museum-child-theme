<?php if(is_archive()): ?>
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
<?php endif ;?>