<?php 
/**
 * Template Name: Impressum Template
 */

 get_header();
?>

<div class="home content-main">
    <section class="main__banner">
        <?php 
        $banner_image_url = get_field('banner_image');
        if ($banner_image_url): ?>
        <div class="single-banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
            <div class="container">
                <h2 class="title-large-text"><?php the_field( 'banner-title' ); ?></h2>
            </div>
        </div>
        <?php endif; ?>
    </section>


    

</div>

<div class="contact__us-wrapper content-pages-wrap impressum">
            
        <div class="container">
            <div class="container-inner">
            
            <?php
                $imprint = get_page_by_title('Impressum');

                if ($imprint) {
                    echo apply_filters('the_content', $imprint->post_content);
                } else {
                    echo '<p>page not found.</p>';
                }
                ?>
            </div>    
        </div>
    </div>


<?php get_footer()?>