<?php
$advantages_data = [
    [
        'advantage_header' => 'Экономия на внедрении',
        'advantage_description' => 'При внедрении in-house большинство работ по реализации функционала выполняет ваша команда, вы оплачиваете только часы консультации специалиста и разработку сложного функционала.'
    ],
    [
        'advantage_header' => 'Взаимопонимание бизнеса и разработчика',
        'advantage_description' => 'Ваша команда понимает потребности и узкие места своих процессов как никто другой. Зная инструменты автоматизации, она сможет точно и быстро переложить свои требования на систему.'
    ],
    [
        'advantage_header' => 'Экономия на поддержке и развитии',
        'advantage_description' => 'Ваша команда пройдет полный цикл внедрения решения и будет знать все тонкости функционала. В будущем не придется тратиться на интегратора для поддержки и развития решения.'
    ],
    [
        'advantage_header' => 'Гибкость и скорость изменений',
        'advantage_description' => 'Ваша команда будет хорошо ориентироваться в решении и иметь навыки настройки платформы. За счет этого изменения будут вноситься быстро, что обеспечит гибкость бизнесу. Вместо траты времени на запрос интегратору, объяснение требований, ваша команда сразу приступит к реализации.'
    ],
    [
        'advantage_header' => 'Повышение квалификации сотрудников',
        'advantage_description' => 'Ваши специалисты получат новые навыки внедрения систем и расширят свой профессиональный опыт.'
    ]
];

$advantages = get_field('advantages') ?: $advantages_data;
?>


<div class="conteiner_advantage">
    <h2>Преимущества</h2>
    <div class="why">
        <h1>Почему мы предлагаем подключать вашу команду в реализацию решения на low-code платформе?</h1>
        <h4>Клиентам мы предлагаем включать своих специалистов в проект внедрения, как low-code разработчиков, аналитиков, и реализовывать решение вместе с нашими специалистами.</h4>
    </div>
    <div class="reasons">
        <div class="block-hide"></div>
        <div class="block-show">
            <ol>
                <li>
                    <h3><?php echo esc_html($advantages[0]['advantage_header']); ?></h3>
                    <h4><?php echo esc_html($advantages[0]['advantage_description']); ?></h4>
                </li>
            </ol>
        </div>
        <div class="block-show">
            <ol>
                <li>
                    <h3><?php echo esc_html($advantages[1]['advantage_header']); ?></h3>
                    <h4><?php echo esc_html($advantages[1]['advantage_description']); ?></h4>
                </li>
            </ol>
        </div>
        <div class="block-hide"></div>
        <div class="block-hide"></div>
        <div class="block-show">
            <ol>
                <li>
                    <h3><?php echo esc_html($advantages[2]['advantage_header']); ?></h3>
                    <h4><?php echo esc_html($advantages[2]['advantage_description']); ?></h4>
                </li>
            </ol>
        </div>
        <div class="block-show">
            <ol>
                <li>
                    <h3><?php echo esc_html($advantages[3]['advantage_header']); ?></h3>
                    <h4><?php echo esc_html($advantages[3]['advantage_description']); ?></h4>
                </li>
            </ol>
        </div>
        <div class="block-hide"></div>
        <div class="block-hide"></div>
        <div class="block-show">
            <ol>
                <li>
                    <h3><?php echo esc_html($advantages[4]['advantage_header']); ?></h3>
                    <h4><?php echo esc_html($advantages[4]['advantage_description']); ?></h4>
                </li>
            </ol>
        </div>
    </div>
</div>