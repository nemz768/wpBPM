<?php
$post_id = get_option('page_on_front');

$hero_title    = get_field('hero_title', $post_id) ?: 'Заголовок по умолчани';
$hero_subtitle = get_field('hero_subtitle', $post_id) ?: 'Подзаголовок по умолчанию';
$hero_btn_text = get_field('hero_button_text', $post_id) ?: 'Узнать подробнее';
$hero_btn_url  = get_field('hero_button_url', $post_id) ?: '#';
?>

<main class="hero">
    <div class="hero-info">
        <h1 class="hero-title"><?php echo wp_kses_post($hero_title); ?></h1>
        <p class="hero-subtitle"><?php echo wp_kses_post($hero_subtitle); ?></p>
        <a href="<?php echo esc_url($hero_btn_url); ?>" class="hero-button">
            <?php echo esc_html($hero_btn_text); ?>
        </a>
    </div>
</main>
