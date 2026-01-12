</main>
<footer class="site-footer">
  <div class="container footer-grid">
    <div>
      <h3>Over The Luna Bounce House</h3>
      <p>Dreamy, safe, and high-energy rentals for North Jersey celebrations.</p>
      <a class="phone-pill" href="tel:<?php echo esc_attr(otl_get_phone()); ?>">Call <?php echo esc_html(otl_get_phone()); ?></a>
    </div>
    <div>
      <h4>Service Area</h4>
      <p>Serving Bergen, Passaic, Essex, and Hudson counties. Delivery, setup, and clean-up included.</p>
      <p class="notice">Fully insured • Cleaned after every event • On-time guarantee</p>
    </div>
    <div>
      <h4>Quick Links</h4>
      <p><a href="<?php echo esc_url(home_url('/events')); ?>">Events Hub</a></p>
      <p><a href="<?php echo esc_url(home_url('/inventory')); ?>">Browse Inventory</a></p>
      <p><a href="<?php echo esc_url(home_url('/book-contact')); ?>">Book / Contact</a></p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
