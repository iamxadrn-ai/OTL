<?php
/*
Template Name: Book / Contact
*/
get_header();
?>
<section class="section">
  <div class="container hero-grid">
    <div>
      <h1>Book / Contact</h1>
      <p>Ready to lock in your date? Call or text us and we will build the perfect package for your event.</p>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="button" href="tel:<?php echo esc_attr(otl_get_phone()); ?>">Call <?php echo esc_html(otl_get_phone()); ?></a>
        <a class="button secondary" href="sms:<?php echo esc_attr(otl_get_phone()); ?>">Text Us</a>
      </div>
    </div>
    <div class="card">
      <h3>Service Area Confirmation</h3>
      <p>We proudly serve Bergen, Passaic, Essex, and Hudson counties. Ask about additional travel.</p>
      <p class="notice">Have your event date, address, and guest count ready when you contact us.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Booking Form</h2>
    <div class="card">
      <p>Embed your SquareUp, Calendly, or Acuity widget here.</p>
      <p>Shortcode placeholder: <strong>[booking-form]</strong></p>
    </div>
  </div>
</section>
<?php
get_footer();
