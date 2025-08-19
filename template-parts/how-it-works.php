<div class="step-container">
    <div class="header-row">
        <h2>Как строится работа?</h2>
        <a href="#" class="read-more">Подробнее - читайте наши кейсы</a>
    </div>
    
    <div class="how-it-works">
        <div class="steps">
            <?php
            $steps = array(
                '1' => 'Определяем цели проекта',
                '2' => 'Собираем требования и перекладываем их на систему',
                '3' => 'Автоматизируем требования на платформе',
                '4' => 'Проводим приемо-сдаточные испытания силами вашей рабочей группы',
                '5' => 'Готовимся ко внедрению и адаптируем ваших пользователей',
                '6' => 'Выходим в опытно-промышленную эксплуатацию',
            );
            
            foreach ($steps as $title => $desc) {
                echo '<div class="step">';
                echo '<div class="step-number">' . esc_html($title) . '</div>';
                echo '<p>' . esc_html($desc) . '</p>';
                echo '</div>';
            }
            ?>
        </div>
        <a href="#" class="mobile-read-more">Подробнее - читайте наши кейсы</a>
    </div>
</div>