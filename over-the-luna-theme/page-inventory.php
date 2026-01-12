<?php
/*
Template Name: Inventory
*/
get_header();
$query = new WP_Query([
    'post_type' => 'rental',
    'posts_per_page' => 12,
]);
?>
<section class="section">
  <div class="container">
    <h1>Inventory</h1>
    <p>Every rental in one place. Filter by event type, rental type, and size to find the perfect fit.</p>

    <div class="filter-bar">
      <select>
        <option>Filter by Event Type</option>
        <option>Birthdays</option>
        <option>School Events</option>
        <option>Sweet 15 / 16</option>
        <option>Corporate Events</option>
        <option>Festivals / Community</option>
      </select>
      <select>
        <option>Filter by Rental Type</option>
        <option>Bounce House</option>
        <option>Combo</option>
        <option>Game</option>
        <option>Concession</option>
        <option>Seating</option>
      </select>
      <select>
        <option>Price Range</option>
        <option>Under $250</option>
        <option>$250 - $500</option>
        <option>$500+</option>
      </select>
      <select>
        <option>Space Needed</option>
        <option>Small Yards</option>
        <option>Medium Yards</option>
        <option>Large Events</option>
      </select>
    </div>

    <div class="card-grid">
      <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <div class="card">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 18); ?></p>
            <a class="button" href="<?php the_permalink(); ?>">View Details</a>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <div class="card">No rentals yet. Add rentals from the dashboard to populate this grid.</div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php
get_footer();
