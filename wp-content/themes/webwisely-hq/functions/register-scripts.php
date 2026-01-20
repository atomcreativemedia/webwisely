<?php
/*********
Prevent the emoji script from being loaded.
*********/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


/*********
Styles and scripts, scripts and styles...
*********/
function scripts_and_styles() {
    // Styles
    wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap', array(), null );
    wp_enqueue_style( 'slickstyles', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
    wp_enqueue_style( 'theme-styles', get_stylesheet_uri(), array(), null );
    
    // Scripts
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '2.2.4', false );
    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/a036d0101c.js',array(),null, false );
    wp_enqueue_script( 'slickslider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'), '5.0.2', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'scripts_and_styles' ); // action hook to actually load the script/s