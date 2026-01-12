<?php
get_header();
?>
<section class="section">
  <div class="container hero-grid">
    <div>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      <a class="button" href="<?php echo esc_url(home_url('/book-contact')); ?>">Book Now</a>
    </div>
    <div>
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large'); ?>
      <?php else : ?>
        <div class="card">Add rental photos for this item.</div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card-grid">
      <div class="card">
        <h3>Size</h3>
        <p>Include length, width, and height requirements.</p>
      </div>
      <div class="card">
        <h3>Power Requirements</h3>
        <p>List blower count, outlet needs, and generator availability.</p>
      </div>
      <div class="card">
        <h3>Age Recommendations</h3>
        <p>Suggested ages, weight limits, and supervision notes.</p>
      </div>
      <div class="card">
        <h3>What's Included</h3>
        <p>Delivery, setup, takedown, and safety instructions.</p>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
