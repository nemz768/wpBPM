<?php

$quote_data = [
    'image_path' => get_template_directory_uri() . '/assets/images/blocks/quote.png',
    'image_alt' => 'Quote image',
    'subtitle' => 'цитата',
    'quote_text' => 'Изменение, привнесенное извне - <span class="empty">принуждение,</span> произошедшее изнутри - <span class="full">развитие</span>'
];
?>

<div class="conteiner-quote">
    <div class="sphere">
        <img src="<?php echo esc_url($quote_data['image_path']); ?>" alt="<?php echo esc_attr($quote_data['image_alt']); ?>">
    </div>
    <h2><?php echo esc_html($quote_data['subtitle']); ?></h2>
    <div class="quote">
        <h1><?php echo $quote_data['quote_text']; ?></h1>
    </div>
</div>