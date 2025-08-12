<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="header-container">
          <div class="header-left-block">
               <h1 class="header-title">
                  <a class="header-title" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                  </a>
                </h1>
             </div>
          <nav class="header-navbar">
                   <?php
                   wp_nav_menu(array(
                       'theme_location' => 'header_menu',
                       'container'      => false,
                       'menu_class'     => 'header-menu',
                       'link_before'    => '<span class="header-menu__text">',
                       'link_after'     => '</span>',
                   ));
                    ?>
               </nav>

              <button id="burger-menu-btn" class="burger-menu-btn">
                       <div class="burger-menu-line"></div>
                       <div class="burger-menu-line"></div>
                       <div class="burger-menu-line"></div>
                   </button>

                   <nav  id="burger-nav" class="burger-nav">
                         <div class="header-left-block">
                                     <h1 class="header-title">
                                        <a class="header-title" href="<?php echo esc_url(home_url('/')); ?>">
                                          <?php bloginfo('name'); ?>
                                        </a>
                                      </h1>
                                   </div>
                          <?php
                                        wp_nav_menu(array(
                                              'theme_location' => 'header_menu',
                                              'container'      => false,
                                              'menu_class'     => 'header-burger-menu',
                                              'link_before'    => '<span class="header-menu__text">',
                                              'link_after'     => '</span>',
                                          ));
                          ?>
                   </nav>

       </div>



 </header>


