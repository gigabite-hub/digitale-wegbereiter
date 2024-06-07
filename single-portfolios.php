<?php get_header(); 

$portfolio_title = get_the_title();
$portfolios_content = get_the_content();
$product_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');

?>


<section class="single_portfolio--details">
    <div class="container">
        
        <div class="hero-section">
            <div class="hero-item">
                <img src="<?php echo esc_url($product_thumbnail); ?>" alt="<?php echo esc_attr( $portfolio_title );?>">
            </div>
            <div class="hero-item">
                <h1><?php echo esc_html($portfolio_title); ?></h1>
                <p><?php echo  esc_html($portfolios_content); ?></p>
            </div>
        </div>

        <div class="scope-section">
            <h2><?php the_field( 'scopes_heading' ); ?></h2>

            <div class="scope-container"><?php 
                if (have_rows('scopes')) :
                    while (have_rows('scopes')) : the_row(); 
                        $scope_image = get_sub_field('scope_image');
                        $scope_heading = get_sub_field('scope_heading');
                        $scope_details = get_sub_field('scope_details');
                    ?>
                    <div class="scope-item"><?php
                        if ($scope_image) : ?>
                            <img src="<?php echo esc_url($scope_image['url']); ?>" alt="<?php echo esc_attr($scope_image['alt']); ?>"><?php
                        endif ?>
                        <h3><?php echo esc_html($scope_heading); ?></h3>
                        <p><?php echo esc_html($scope_details); ?></p>
                    </div><?php 
                    endwhile;
                endif; ?>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>