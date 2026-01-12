<?php
get_header();
?>
<section class="section">
  <div class="container">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <div class="card-grid">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="card">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 18); ?></p>
            <a class="button" href="<?php the_permalink(); ?>">Read More</a>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <div class="card">No content yet.</div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php
get_footer();
