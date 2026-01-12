<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container header-inner">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
      <span>Over The Luna</span> Bounce House
    </a>
    <nav class="nav-links">
      <?php
      wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'fallback_cb' => function () {
              echo '<a href="' . esc_url(home_url('/')) . '">Home</a>';
              echo '<a href="' . esc_url(home_url('/events')) . '">Events</a>';
              echo '<a href="' . esc_url(home_url('/inventory')) . '">Inventory</a>';
              echo '<a href="' . esc_url(home_url('/faq-safety')) . '">FAQ / Safety</a>';
              echo '<a href="' . esc_url(home_url('/book-contact')) . '">Book / Contact</a>';
          },
      ]);
      ?>
    </nav>
    <a class="phone-pill" href="tel:<?php echo esc_attr(otl_get_phone()); ?>">Call <?php echo esc_html(otl_get_phone()); ?></a>
  </div>
</header>
<main>
