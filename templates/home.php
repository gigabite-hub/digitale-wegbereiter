<?php 
/**
 * Template Name: Home Template
 */

get_header();
$hero_slides = get_field( 'hero_slides' ); ?>

<section class="main__banner">
    <div class="swiper banner__slider">
        <div class="swiper-wrapper"><?php

            if ( $hero_slides ) :
                foreach ( $hero_slides as $post ) :
                    setup_postdata ( $post );

                    $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'full');
                    $medium_thumbnail_url = get_the_post_thumbnail_url($post->ID, 'medium');

                    $banner_title = get_field('banner_title', $post->ID);
                    $banner_button = get_field('banner_button', $post->ID);
                    ?>
                    <div class="swiper-slide">
                        <div class="banner__slide-item" style="background-image: url(<?php echo esc_url($thumbnail_url); ?>);">
                            <div class="container">
                                <div class="banner__slide-content--wrapper">
                                    <h1><?php echo esc_html($banner_title);?></h1>
                                    <h2 class="title-large-text"><?php the_field( 'large_text' ); ?></h2>
                                    <p><?php the_excerpt();?></p>
                                    <?php if($banner_button):?>
                                        <div class="banner__btn">
                                            <a href="#contactForm"><?php echo esc_html($banner_button['title'])?></a>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                endforeach;
            endif;
            wp_reset_postdata(); ?>
        </div>

        <div class="banner__slide-arrow">
            <div class="swiper-button-next">
                <svg width="21" height="32" viewBox="0 0 21 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.42637 0.000551052C1.95339 -0.00985186 1.48892 0.127259 1.09753 0.393032C0.706145 0.658806 0.40729 1.04011 0.242517 1.48358C0.0777435 1.92705 0.0552398 2.41078 0.178133 2.86763C0.301027 3.32449 0.563211 3.73152 0.928235 4.03248L14.856 15.9642L0.928235 27.8917C0.67573 28.0773 0.464262 28.3129 0.307076 28.584C0.14989 28.8551 0.050372 29.1558 0.0147528 29.4671C-0.0208665 29.7785 0.00818139 30.0937 0.100077 30.3933C0.191972 30.6929 0.344735 30.9704 0.5488 31.2082C0.752865 31.446 1.00384 31.6389 1.28599 31.7753C1.56815 31.9116 1.87542 31.9882 2.18856 32.0003C2.5017 32.0123 2.81395 31.9598 3.10578 31.8456C3.3976 31.7314 3.66271 31.5582 3.88449 31.3368L19.8305 17.6935C20.0809 17.4798 20.282 17.2145 20.4199 16.9156C20.5578 16.6166 20.6292 16.2913 20.6292 15.9621C20.6292 15.6329 20.5578 15.3075 20.4199 15.0086C20.282 14.7096 20.0809 14.4441 19.8305 14.2304L3.88449 0.573915C3.48167 0.216118 2.965 0.0132273 2.42637 0.000551052Z" fill="white"/>
                </svg>
            </div>
            <div class="swiper-button-prev">
                <svg width="21" height="32" viewBox="0 0 21 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.2028 31.9994C18.6758 32.0099 19.1402 31.8727 19.5316 31.607C19.923 31.3412 20.2219 30.9599 20.3866 30.5164C20.5514 30.0729 20.5739 29.5892 20.451 29.1324C20.3281 28.6755 20.0659 28.2685 19.7009 27.9675L5.77317 16.0358L19.7009 4.10833C19.9534 3.92274 20.1649 3.68713 20.3221 3.41604C20.4793 3.14494 20.5788 2.84423 20.6144 2.53289C20.65 2.22155 20.621 1.90628 20.5291 1.60668C20.4372 1.30709 20.2844 1.02961 20.0803 0.791792C19.8763 0.553974 19.6253 0.361063 19.3432 0.22473C19.061 0.0883962 18.7537 0.0118238 18.4406 -0.000259208C18.1275 -0.0123403 17.8152 0.0401843 17.5234 0.154372C17.2315 0.268559 16.9664 0.441765 16.7447 0.663153L0.798657 14.3065C0.548245 14.5202 0.347163 14.7855 0.209279 15.0844C0.0713963 15.3834 -5.23893e-06 15.7087 -5.21015e-06 16.0379C-5.18137e-06 16.3671 0.0713964 16.6925 0.209279 16.9914C0.347163 17.2904 0.548245 17.5559 0.798657 17.7696L16.7447 31.4261C17.1475 31.7839 17.6642 31.9868 18.2028 31.9994Z" fill="white"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<section class="banner__bottom-layer">

</section>

<section class="mission__wrapper">
    <div class="container">
        <div class="mission__wrapper-title">
            <h2><?php echo esc_html(get_field('about_section_heading'));?></h2>
        </div>
        <?php
            $args = array(
                'post_type'         => 'service',
                'post_status'       => 'publish',
                'order'             => 'DESC',
                'posts_per_page'    => 4,
            );

            $our_Services = new WP_Query($args);
        ?>
        <div class="missions__row">
            <?php 
             if ($our_Services->have_posts()) :
                while ($our_Services->have_posts()) : $our_Services->the_post();
                    $project_image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $our_Services_thumbnail_id = get_post_thumbnail_id();
                    $our_Services_alt_text = get_post_meta($our_Services_thumbnail_id, '_wp_attachment_image_alt', true);
                   
                ?>
                <div class="mission__card-column">
                    <div class="mission__card-item">
                        <div class="mission__card-image">
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php echo esc_attr($our_Services_alt_text);?>">
                        </div>
                        <div class="mission__card-content">
                            <h3><?php the_title();?></h3>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
                            <!-- <a href="<?php // the_permalink();?>">Read More</a> -->
                        </div>
                    </div>
                </div>

                <?php
             endwhile;
            endif;
            wp_reset_postdata();
            ?>  

        </div>
    </div>
</section>

<section class="contact__us-wrapper" id="contact__form">
    <div class="container">
        <div class="contact__title">
            <h2><?php echo esc_html__('Contact', 'diditale'); ?></h2>
        </div>
        <div class="contact__form-block" id="contactForm">
            <?php echo do_shortcode('[contact-form-7 id="ef2a4d0" title="Contact US Form"]')?>
        </div>
    </div>
</section>

<?php get_footer();?>

