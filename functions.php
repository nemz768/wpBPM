
<?php



function wpBPM_custom_header_setup() {
           add_theme_support('custom-header', array(
               'width'  => 1920,
               'height' => 400,
               'flex-height' => true,
               'flex-width' => true,
           ));

           register_nav_menus(array(
                   'header_menu' => __('Header Menu', 'wpBPM'),
            ));
}



add_theme_support('title-tag');

add_action("after_setup_theme", "wpBPM_custom_header_setup");


function wpBPM_enqueue_scripts() {
     wp_enqueue_style('style-css', get_stylesheet_uri());
     wp_enqueue_style('header-css', get_stylesheet_directory_uri() . '/assets/css/header/header.css');
     wp_enqueue_style(
          'how-it-works-css',
          get_stylesheet_directory_uri() . '/assets/css/blocks/how-it-works.css'
     );
     wp_enqueue_style(
          'you-get-css',
          get_stylesheet_directory_uri() . '/assets/css/blocks/you-get.css'
     );
      wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main/main.css');
      wp_enqueue_style(
               'footer-css',
                get_stylesheet_directory_uri() . '/assets/css/footer/footer.css'
           );
     wp_enqueue_script('header-burger-menu-js',get_template_directory_uri() . '/assets/js/header-burger-menu.js');
}

add_action('wp_enqueue_scripts', 'wpBPM_enqueue_scripts');

?>