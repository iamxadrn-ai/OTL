<?php
get_header();
$event_links = [
    ['id' => 'birthdays', 'label' => 'Birthdays', 'copy' => 'Bouncy fun for the biggest day.'],
    ['id' => 'school', 'label' => 'School Events', 'copy' => 'Field days and fundraisers made easy.'],
    ['id' => 'sweet', 'label' => 'Sweet 15 / 16', 'copy' => 'Glow-up celebrations with luxe add-ons.'],
    ['id' => 'corporate', 'label' => 'Corporate Events', 'copy' => 'Team days and company picnics.'],
    ['id' => 'festivals', 'label' => 'Festivals / Community', 'copy' => 'Crowd-pleasing rentals for big gatherings.'],
];
?>
<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="badge">Dreamy • Safe • Insured</span>
      <h1>Over The Luna Bounce House</h1>
      <p>Bring the dreamy sky party vibe to every celebration. We deliver, set up, and clean up beautiful inflatables, games, and packages across North Jersey.</p>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="button" href="<?php echo esc_url(home_url('/book-contact')); ?>">Book Now</a>
        <a class="button secondary" href="tel:<?php echo esc_attr(otl_get_phone()); ?>">Call <?php echo esc_html(otl_get_phone()); ?></a>
      </div>
    </div>
    <div class="hero-card">
      <h3>Next Steps</h3>
      <p>Choose your event type, see curated packages, then build your perfect celebration.</p>
      <ul>
        <li>Event-first shopping experience</li>
        <li>Cleaned and sanitized after every rental</li>
        <li>Friendly team that arrives early</li>
      </ul>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Choose Your Event</h2>
    <div class="card-grid">
      <?php foreach ($event_links as $event) : ?>
        <a class="card" href="<?php echo esc_url(home_url('/events/#' . $event['id'])); ?>">
          <h3><?php echo esc_html($event['label']); ?></h3>
          <p><?php echo esc_html($event['copy']); ?></p>
          <span class="badge">Explore event</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Popular Packages</h2>
    <div class="card-grid">
      <?php
      $package_query = new WP_Query([
          'post_type' => 'package',
          'posts_per_page' => 3,
      ]);
      if ($package_query->have_posts()) :
          while ($package_query->have_posts()) :
              $package_query->the_post();
              ?>
              <div class="card">
                <h3><?php the_title(); ?></h3>
                <p><?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 18); ?></p>
                <a class="button" href="<?php the_permalink(); ?>">View Package</a>
              </div>
              <?php
          endwhile;
          wp_reset_postdata();
      else :
          ?>
          <div class="card">
            <h3>Birthday Sparkle</h3>
            <p>Bounce house, mini slide, and cotton candy cart. Perfect for 15-20 kids.</p>
          </div>
          <div class="card">
            <h3>School Field Day</h3>
            <p>Obstacle course, dunk tank, and yard games. Great for school-wide fun.</p>
          </div>
          <div class="card">
            <h3>Sweet 16 Luxe</h3>
            <p>Glitter bounce, LED lounge, and photo moment station for a glam celebration.</p>
          </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Why Over The Luna</h2>
    <div class="trust-grid">
      <div class="card">
        <h3>Insured & Certified</h3>
        <p>We carry full liability insurance and use commercial-grade equipment.</p>
      </div>
      <div class="card">
        <h3>Clean & Sanitized</h3>
        <p>Every unit is scrubbed, disinfected, and inspected after each event.</p>
      </div>
      <div class="card">
        <h3>On-Time Promise</h3>
        <p>Our team arrives early to ensure every party starts on schedule.</p>
      </div>
      <div class="card">
        <h3>Family-Owned Care</h3>
        <p>We treat every celebration like it is for our own family.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Gallery</h2>
    <div class="gallery-strip">
      <div class="card">Dreamy pastel bounce house setup</div>
      <div class="card">Festival-ready inflatable games</div>
      <div class="card">Glow party seating lounge</div>
      <div class="card">School field day inflatables</div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-banner">
      <div>
        <h2>Ready to book your dreamy celebration?</h2>
        <p>Call or text us now and we will help you choose the perfect package.</p>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="button" href="<?php echo esc_url(home_url('/book-contact')); ?>">Book Now</a>
        <a class="button secondary" href="tel:<?php echo esc_attr(otl_get_phone()); ?>">Call <?php echo esc_html(otl_get_phone()); ?></a>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
