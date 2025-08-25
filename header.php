<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  <?php bloginfo('name'); ?></title>


    <!--Основые настройки -->>
    <meta name="description" content="Автоматизация, SRE, low-code, low-code для бизнеса, цифровизация, центр компетенций, база знаний">
    <meta name="keywords" content="Автоматизация, SRE, low-code, low-code для бизнеса, цифровизация, центр компетенций, база знаний">
    <meta name="copyright" content="ООО «Лаборатория БПМ»">

    <!-- <meta name="robots" content="all"> -->

     <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="header-container">
          <div class="header-left-block">
               <h1 class="header-title">
                  <a class="header-title" href="<?php echo esc_url(home_url('/')); ?>">
                   <?php
                   $field = get_field("header_logo_text");
                        if ($field):
                       echo esc_html($field);
                        endif;
                   ?>
                  </a>
                </h1>
             </div>


<nav class="header-menu header-navbar">
<?php
$links_group = get_field("header_menu_links");
if ($links_group && is_array($links_group)):
    foreach ($links_group as $link):
?>
    <div class="header-menu-item">
        <a href="<?php echo esc_url($link['menu_item_url']); ?>" class="header-menu__text">
            <?php echo esc_html($link["menu_item_label"]); ?>
            <span class="header-menu-item-svg"><?php echo $link["menu_link_svg"]; ?></span>
        </a>

        <?php if (!empty($link["menu-submenu"]) && is_array($link["menu-submenu"])): ?>
            <div class="menu-submenu">
                <ul class="submenu-list">
                    <?php foreach($link["menu-submenu"] as $submenu): ?>
                        <li>
                            <a href="<?php echo esc_url($submenu['menu-submenu-url']); ?>">
                                <?php echo esc_html($submenu["menu-submenu-text"]); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
<?php
    endforeach;
endif;
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
                                            <?php
                                         $field = get_field("header_logo_text");
                                                    if ($field):
                                                  echo esc_html($field);
                                                endif;
                                             ?>
                                        </a>
                                      </h1>
                                   </div>

                               <div class="header-burger-menu">
                              <?php
                              $links_group = get_field("header_menu_links");
                              if ($links_group && is_array($links_group)):
                                  foreach ($links_group as $link):
                              ?>
                                  <div class="header-menu-item">
                                      <a href="<?php echo esc_url($link['menu_item_url']); ?>" class="header-menu__text">
                                          <?php echo esc_html($link["menu_item_label"]); ?>
                                          <span class="header-menu-item-svg"><?php echo $link["menu_link_svg"]; ?></span>
                                      </a>

                                      <?php if (!empty($link["menu-submenu"]) && is_array($link["menu-submenu"])): ?>
                                          <div class="menu-submenu">
                                              <ul class="submenu-list">
                                                  <?php foreach($link["menu-submenu"] as $submenu): ?>
                                                      <li>
                                                          <a href="<?php echo esc_url($submenu['menu-submenu-url']); ?>">
                                                              <?php echo esc_html($submenu["menu-submenu-text"]); ?>
                                                          </a>
                                                      </li>
                                                  <?php endforeach; ?>
                                              </ul>
                                          </div>
                                      <?php endif; ?>
                                  </div>
                              <?php
                                  endforeach;
                              endif;
                              ?>
                               </div>
                   </nav>



       </div>

 </header>


