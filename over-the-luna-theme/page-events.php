<?php
/*
Template Name: Events Hub
*/
get_header();
$events = [
    'birthdays' => 'Birthdays',
    'school' => 'School Events',
    'sweet' => 'Sweet 15 / 16',
    'corporate' => 'Corporate Events',
    'festivals' => 'Festivals / Community',
];
?>
<section class="section">
  <div class="container">
    <h1>Events Hub</h1>
    <p>Start by choosing your event type, then explore curated packages, add-ons, and rentals built for that celebration style.</p>
    <div class="event-selector">
      <?php foreach ($events as $slug => $label) : ?>
        <a class="event-chip" href="#<?php echo esc_attr($slug); ?>"><?php echo esc_html($label); ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php foreach ($events as $slug => $label) : ?>
  <section id="<?php echo esc_attr($slug); ?>" class="section">
    <div class="container event-section">
      <h2><?php echo esc_html($label); ?></h2>
      <p>Curated experiences to make <?php echo esc_html($label); ?> unforgettable.</p>
      <div class="card-grid">
        <div class="package-tier">
          <h3>Basic</h3>
          <p>1 featured inflatable + delivery, setup, and safety briefing.</p>
        </div>
        <div class="package-tier">
          <h3>Popular</h3>
          <p>Inflatable + game + concession cart to keep the energy high.</p>
        </div>
        <div class="package-tier">
          <h3>Premium</h3>
          <p>Full experience bundle with lounge seating and upgraded décor.</p>
        </div>
      </div>

      <h3 style="margin-top:30px;">Best Add-ons</h3>
      <div class="card-grid">
        <div class="card">Cotton Candy + Popcorn Carts</div>
        <div class="card">Giant Yard Games</div>
        <div class="card">Tables, Chairs & Tents</div>
      </div>

      <h3 style="margin-top:30px;">Curated Rentals</h3>
      <div class="card-grid">
        <?php
        $rentals = new WP_Query([
            'post_type' => 'rental',
            'posts_per_page' => 4,
            'tax_query' => [
                [
                    'taxonomy' => 'event_type',
                    'field' => 'slug',
                    'terms' => $slug,
                ],
            ],
        ]);
        if ($rentals->have_posts()) :
            while ($rentals->have_posts()) :
                $rentals->the_post();
                ?>
                <div class="card">
                  <h4><?php the_title(); ?></h4>
                  <p><?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 16); ?></p>
                  <a class="button" href="<?php the_permalink(); ?>">View Rental</a>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <div class="card">Dreamy Bounce House</div>
            <div class="card">Rainbow Slide Combo</div>
            <div class="card">Glitter Photo Booth</div>
            <div class="card">Carnival Game Set</div>
        <?php endif; ?>
      </div>

      <div style="margin-top:30px;">
        <a class="button" href="<?php echo esc_url(home_url('/book-contact')); ?>">Book This Event</a>
      </div>
    </div>
  </section>
<?php endforeach; ?>
<?php
get_footer();
