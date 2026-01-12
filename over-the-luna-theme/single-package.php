<?php
get_header();
?>
<section class="section">
  <div class="container hero-grid">
    <div>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="button" href="<?php echo esc_url(home_url('/book-contact')); ?>">Book Package</a>
        <a class="button secondary" href="tel:<?php echo esc_attr(otl_get_phone()); ?>">Call <?php echo esc_html(otl_get_phone()); ?></a>
      </div>
    </div>
    <div>
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large'); ?>
      <?php else : ?>
        <div class="card">Add package imagery here.</div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card">
      <h3>Package Highlights</h3>
      <ul>
        <li>Recommended for this event type</li>
        <li>Includes delivery, setup, and teardown</li>
        <li>Bundle pricing to maximize value</li>
      </ul>
    </div>
  </div>
</section>
<?php
get_footer();
