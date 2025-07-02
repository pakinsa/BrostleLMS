<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <nav>
      <div class="logo">
        <?php 
          if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
            the_custom_logo();
          } else {
            echo '<a href="' . esc_url( home_url( '/' ) ) . '">BrostleLearn</a>';
          }
        ?>
      </div>
      <!-- Optional: Add nav menu here -->
    </nav>
  </header>