<?php 
/**
 * Template Name: Portfolio Template
 */

 get_header();
?>


<section class="portfolio__wrapper">
        <div class="container">
            <div class="portfolio__title-wrapper">
                <h1><?php echo __(get_field('portfolio_main_heading'), 'diditale'); ?></h1>
                <p><?php echo __(get_field('portfolio_short_description'), 'diditale'); ?></p>
            </div>


            <?php
                $args = array(
                    'post_type'         => 'portfolios',
                    'post_status'       => 'publish',
                    'order'             => 'DESC',
                    'posts_per_page'    => -1,
                );

                $portfolio = new WP_Query($args);
            ?>
            <div class="missions__row">
                <?php 
                 if ($portfolio->have_posts()) :
                    while ($portfolio->have_posts()) : $portfolio->the_post();
                        $portfolio_thumbnail_id = get_post_thumbnail_id();
                        $portfolio_alt_text = get_post_meta($portfolio_thumbnail_id, '_wp_attachment_image_alt', true);     ?>
                        <div class="mission__card-column">
                            <div class="mission__card-item">
                                <div class="mission__card-image">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="<?php echo $portfolio_alt_text;?>">
                                </div>
                                <div class="mission__card-content">
                                    <h3><?php the_title();?></h3>
                                    <p><?php the_excerpt();?></p>
                                    <a href="<?php the_permalink();?>"><?php echo esc_html__("Read More", 'diditale'); ?></a>
                                </div>
                            </div>
                        </div><?php 
                
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>


<?php get_footer()?>