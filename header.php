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
            // Display a neutral placeholder image
            echo '<a href="' . esc_url( home_url( '/' ) ) . '">
                    <img src="' . get_template_directory_uri() . '/assets/images/logo-placeholder.png" alt="Site Logo" style="height: 40px;">
                  </a>';
          }
        ?>
      </div>
      <!-- Optional: Add nav menu here -->
    </nav>
  </header>