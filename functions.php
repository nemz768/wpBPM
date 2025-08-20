
<?php






add_theme_support('title-tag');

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
     wp_enqueue_script('header-scroll-effect-js',get_template_directory_uri() . '/assets/js/header/header-scroll-effect.js');
     wp_enqueue_script('header-burger-menu-js',get_template_directory_uri() . '/assets/js/header/header-burger-menu.js');
     wp_enqueue_script('header-submenu-js',get_template_directory_uri() . '/assets/js/header/header-submenu.js');
}

add_action('wp_enqueue_scripts', 'wpBPM_enqueue_scripts');

?>