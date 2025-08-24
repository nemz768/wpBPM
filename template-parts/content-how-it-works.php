<?php
$steps = get_field('how_it_work');
$step_number = 1;
?>

<div class="step-container">
    <div class="header-row">
        <h2>Как строится работа?</h2>
        <a href="#" class="read-more">Подробнее - читайте наши кейсы</a>
    </div>
    
    <div class="how-it-works">
        <div class="steps">
            <?php if ($steps && is_array($steps)) : ?>
                <?php foreach ($steps as $step) : ?>
                    <?php if (!empty($step['how_it_work_step'])) : ?>
                        <div class="step">
                            <div class="step-number"><?php echo esc_html($step_number); ?></div>
                            <p><?php echo esc_html($step['how_it_work_step']); ?></p>
                        </div>
                        <?php $step_number++; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <a href="#" class="mobile-read-more">Подробнее - читайте наши кейсы</a>
    </div>
</div>