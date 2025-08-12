
<?php


//
// function wpBPM_custom_header_setup() {
//         add_theme_support('custom-header', array (
//         'width' => 100,
//         'height' => 300
//         ));
// }


function wpBPM_enqueue_scripts() {
     wp_enqueue_style('style-css', get_stylesheet_uri());
     wp_enqueue_style('header-css', get_stylesheet_directory_uri() . '/assets/css/header/header.css');
     wp_enqueue_style(
          'how-it-works-css', 
          get_stylesheet_directory_uri() . '/assets/css/blocks/how-it-works.css'
     );
}
add_action('wp_enqueue_scripts', 'wpBPM_enqueue_scripts');

?>