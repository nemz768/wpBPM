<div class="get-container">
    <div class="get-wrapper">
        <div class="get-header">
            <h2>Что вы получите?</h2>
        </div>
        <div class="get-content">
            <div class="you-get-text">
                <?php
                   $field = get_field("you-get-explanation");
                        if ($field):
                       echo esc_html($field);
                        endif;
                ?>
            </div>
            
            <?php
            $blocks = get_field('you-get-blocks');
            if ($blocks && is_array($blocks)) {
                $total_blocks = count($blocks);
                foreach ($blocks as $index => $block) {
                    if (!empty($block['you-get-header']) && !empty($block['you-get-image'])) {
            ?>
            <div class="benefit-item">
                <div class="benefit-line"></div>
                
                <div class="benefit-content">
                    <div class="benefit-left">
                        <h3><?php echo esc_html($block['you-get-header']); ?></h3>
                        <img src="<?php echo esc_url($block['you-get-image']); ?>" alt="<?php echo esc_attr($block['you-get-header']); ?>">
                    </div>
                    
                    <?php if (!empty($block['you-get-points']) && is_array($block['you-get-points'])) : ?>
                    <div class="benefit-right">
                        <ul>
                            <?php foreach ($block['you-get-points'] as $point) : ?>
                                <?php if (!empty($point['you-get-point'])) : ?>
                                <li><?php echo esc_html($point['you-get-point']); ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                
                <?php if ($index === $total_blocks - 1): ?>
                <div class="benefit-line"></div>
                <?php endif; ?>
            </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</div>