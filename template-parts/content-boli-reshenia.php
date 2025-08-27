<div class="content-boli">
    <h2 class="section-title">Боли и решения</h2>
    <section class="pains-section container">

        <?php if ( have_rows('pains_and_solutions_header_1') ): ?>
            <div class="accordion"> <!-- один общий аккордеон -->
                <?php while ( have_rows('pains_and_solutions_header_1') ): the_row(); ?>
                    <?php
                        $logo     = get_sub_field('pains_and_solutions_logo'); // URL строки
                        $header   = get_sub_field('decryption_header');
                        $subtitle = get_sub_field('descryption-subtitle');
                    ?>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <?php if ($logo): ?>
                                <img class="accordion-logo" src="<?php echo esc_url($logo); ?>" alt="">
                            <?php endif; ?>

                            <div class="accordion-header-text">
                                <?php if ($header): ?>
                                    <span class="accordion-title"><?php echo esc_html($header); ?></span>
                                <?php endif; ?>
                                <?php if ($subtitle): ?>
                                    <span class="accordion-subtitle"><?php echo esc_html($subtitle); ?></span>
                                <?php endif; ?>
                                  <div class="accordion-icon"></div>
                            </div>
                        </div>

                        <div class="accordion-content">
                            <div class="accordion-body">
                                <?php if ( have_rows('points') ): ?>
                                    <?php while ( have_rows('points') ): the_row(); ?>
                                        <p>
                                            <?php if ( get_sub_field('point_header') ): ?>
                                                <strong><?php the_sub_field('point_header'); ?>:</strong>
                                            <?php endif; ?>
                                            <?php the_sub_field('point_description'); ?>
                                        </p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </section>
</div>
