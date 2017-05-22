<?php

  function my_favicon() {
    echo '<link rel="shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/img/favicon.png" />';
  }
  add_action('wp_head', 'my_favicon');


  // Connecting parent theme styles
  function name_enqueue_styles() {
    wp_enqueue_style( 'quill-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'quill-child-style', get_stylesheet_uri(), array( 'quill-style' ) );
  }
  add_action( 'wp_enqueue_scripts', 'name_enqueue_styles' );



  // So that the child style does't load twice, disconnect it
  function name_dequeue_styles() {
    wp_dequeue_style( 'quill-style' );
  }
  add_action( 'wp_print_styles', 'name_dequeue_styles' );

?>
