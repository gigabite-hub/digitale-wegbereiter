<?php 
/**
 * Template Name: Portfolio Template
 */

 get_header();
?>


<section class="portfolio-wrapper portfolio__wrapper">
    <div class="container">
        <div class="portfolio__title-wrapper">
            <h1><?php echo __(get_field('portfolio_main_heading'), 'diditale'); ?></h1>
            <p><?php echo __(get_field('portfolio_short_description'), 'diditale'); ?></p>
        </div><?php

        $args = array(
            'post_type'         => 'portfolios',
            'post_status'       => 'publish',
            'order'             => 'DESC',
            'posts_per_page'    => -1,
        );

        $portfolio = new WP_Query($args); ?>

        <div class="portfolio-container"><?php
            if ($portfolio->have_posts()) :
                while ($portfolio->have_posts()) : $portfolio->the_post();
                    $portfolio_thumbnail_id = get_post_thumbnail_id();
                    $portfolio_alt_text = get_post_meta($portfolio_thumbnail_id, '_wp_attachment_image_alt', true); ?>
                    <div class="portfolio-item">
                        
                        <div class="portfolio-card">
                            <div class="portfolio-card-item">
                                <?php the_post_thumbnail('medium_large', ['alt' => $portfolio_alt_text]); ?>
                            </div>
                            <div class="portfolio-card-item">
                                <div class="portfolio-content-top">
                                    <h3><?php the_title();?></h3>
                                    <p><?php the_excerpt();?></p>
                                </div>
                                <div class="portfolio-content-bottom">
                                    <a href="<?php the_permalink();?>"><?php echo esc_html__("Read More", 'diditale'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div><?php

                endwhile;
            endif; ?>
        </div>


    </div>
</section>


<?php get_footer()?>