<?php

$about_us_data = [
    [
        'about_us_in_numbers_number' => '300+',
        'number_class' => 'item_1_numbers',
        'about_us_in_numbers_header' => 'Обученных low-code разработчиков на elma',
        'about_us_in_numbers_description' => 'Наш центр обучения выпустил более 300 подготовленных с 0 специалистов по ELMA365, как для компаний-пользователей ELMA365, так и для пополнения нашей дружной команды во всех городах присутствия.'
    ],
    [
        'about_us_in_numbers_number' => '60+',
        'number_class' => 'item_1_numbers',
        'about_us_in_numbers_header' => 'сертифицированных специалистов elma',
        'about_us_in_numbers_description' => 'В настоящее время в компании работает более 60 сертифицированных по ELMA365 специалистов, количество которых постоянно растет вместе с появлением новых проектов.'
    ],
    [
        'about_us_in_numbers_number' => '100+',
        'number_class' => 'item_2_numbers',
        'about_us_in_numbers_header' => 'проектов на elma',
        'about_us_in_numbers_description' => 'С 2017 года нами реализовано более 100 проектов по автоматизации бизнес-процессов и цифровой трансформации более чем 40 компаний.'
    ],
    [
        'about_us_in_numbers_number' => '8',
        'number_class' => 'item_2_numbers',
        'about_us_in_numbers_header' => 'лет автоматизируем процессы на elma',
        'about_us_in_numbers_description' => 'Компания создана в 2014 году, с 2017 года мы специализируемся исключительно на проектах комплексной цифровой трансформации бизнеса, оптимизации бизнес-процессов и их подготовке к автоматизации при помощи BPMS (Business Process Management System).'
    ],
    [
        'about_us_in_numbers_number' => 'platinum',
        'number_class' => 'item_3_numbers',
        'about_us_in_numbers_header' => 'партнер elma',
        'about_us_in_numbers_description' => 'Глубокая экспертиза в области бизнес-процессов и цифровой трансформации компаний, а также экспертное владение технологическим стеком ELMA365, позволяют нам с гордостью носить титул Платинового партнера ELMA.'
    ]
];
?>

<div class="conteiner_about_us">    
    <h2>О нас в цифрах</h2>
    <div class="about_us_in_numbers">
        <?php foreach ($about_us_data as $item): ?>
            <div class="number_block">

                <?php
                   $field = get_field("about_us_in_numbers");
                        if ($field):
                       echo esc_html($field);
                        endif;
                ?>

                <div class="<?php echo esc_attr($item['number_class']); ?>">
                    <h3><?php echo esc_html($item['about_us_in_numbers_number']); ?></h3>
                </div>
                <div class="text">
                    <h4><?php echo esc_html($item['about_us_in_numbers_header']); ?></h4>
                    <p><?php echo esc_html($item['about_us_in_numbers_description']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>