<?php

require_once(get_template_directory().'/post-type.php');
// ============ Add theme Supports 

// Define theme version if not already defined.
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if (!function_exists('site_setup')) :
    function site_setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
        add_theme_support('customize-selective-refresh-widgets');

        if (function_exists('add_image_size')) {
            add_image_size('single-post-card', 350, 220, true);
            add_image_size('gen-featured', 960, 320, true);
        }
        register_nav_menus(array(
            'main_menu' => __('main_menu'),
            // 'main_sidebar_menu' => __('main_sidebar_menu'),
            'footer_menu' => __('footer_main'),
        ));

        add_theme_support('title-tag');
        if (!isset($content_width)) {
            $content_width = 1200;
        }
    }
endif;

add_action('after_setup_theme', 'site_setup');
 
function digitale_scripts(){

    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), _S_VERSION, true );
    
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/style.css',  array(), _S_VERSION, 'all');
    wp_enqueue_style('clippath-css', get_template_directory_uri() . '/assets/css/app-clippath.css',  array(), _S_VERSION, 'all');
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), _S_VERSION, true );
}

add_action('wp_enqueue_scripts' , 'digitale_scripts');


function custom_theme_customize_register($wp_customize) {
    $wp_customize->add_section('footer_settings', array(
        'title' => 'Footer Settings',
        'priority' => 30,
    ));

     $wp_customize->add_setting('copyright_text');
     $wp_customize->add_control('copyright_text' , array(
        'type' => 'textarea',
        'label' => "Copyright Text",
        'section' => "footer_settings"
     ));

}

add_action('customize_register', 'custom_theme_customize_register');

// Registering Categories
add_action('init', 'register_custom_block_categories');
function register_custom_block_categories()
{
    $pattern_categories = [
        'Portfolio Patterns' => __('Portfolio Patterns', 'digitale'),
        'Portfolio Content' => __('Portfolio Content', 'digitale'),
        'Portfolio Gallery' => __('Portfolio Gallery' , 'digitale')
    ];

    if (!empty($pattern_categories) && is_array($pattern_categories)) {
        foreach ($pattern_categories as $pattern_category => $pattern_category_label) {
            register_block_pattern_category(
                $pattern_category,
                [
                    'label' => $pattern_category_label
                ]
            );
        }
    }
}
add_action('init', 'custom_block_patterns');

function custom_block_patterns(){
    if (function_exists('register_block_pattern')) {
        // home banner
        register_block_pattern(
            'Digitale Patterns/portfolio-content',
            [
                'title' => __('Portfolio content Listing', 'Digitale'),
                'description' => __('', 'Digitale'),
                'categories' => ['Digitale Patterns'],
                'content' => '<!-- wp:columns {"verticalAlignment":"center"} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":71,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="http://localhost/digitale-wegbereiter/wp-content/uploads/2024/02/banner__img2-1.png" alt="" class="wp-image-71"/></figure>
                <!-- /wp:image --></div>
                <!-- /wp:group --></div>
                <!-- /wp:column -->
                
                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading -->
                <h2 class="wp-block-heading">Mission</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>To be the leading catalyst for global digital transformation, driving innovation, enabling the seamless integration of technology into businesses, and fostering a future where businesses thrive in a digitally connected world.</p>
                <!-- /wp:paragraph --></div>
                <!-- /wp:group --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns -->
                
                <!-- wp:spacer -->
                <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->',
            ]
        );

      }
      if (function_exists('register_block_pattern')) {
        // home banner
        register_block_pattern(
            'Digitale Patterns/portfolio-gallery',
            [
                'title' => __('Portfolio Gallery', 'Digitale'),
                'description' => __('', 'Digitale'),
                'categories' => ['Portfolio Patterns'],
                'content' => '<!-- wp:group {"layout":{"type":"constrained"}} -->
                <div id="main__cards-wrapper" class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
                <h2 class="wp-block-heading has-text-align-center">The Full Scope Of Our Banking Software</h2>
                <!-- /wp:heading -->
                
                <!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":75,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="http://localhost/digitale-wegbereiter/wp-content/uploads/2024/02/base_icon_white_background.png" alt="" class="wp-image-75"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:heading {"textAlign":"center","level":4} -->
                <h4 class="wp-block-heading has-text-align-center">Corporate Banking</h4>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">o be the leading catalyst for global digital transformation, driving innovation</p>
                <!-- /wp:paragraph --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":75,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="http://localhost/digitale-wegbereiter/wp-content/uploads/2024/02/base_icon_white_background.png" alt="" class="wp-image-75"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:heading {"textAlign":"center","level":4} -->
                <h4 class="wp-block-heading has-text-align-center">Corporate Banking</h4>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">o be the leading catalyst for global digital transformation, driving innovation</p>
                <!-- /wp:paragraph --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":75,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="http://localhost/digitale-wegbereiter/wp-content/uploads/2024/02/base_icon_white_background.png" alt="" class="wp-image-75"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:heading {"textAlign":"center","level":4} -->
                <h4 class="wp-block-heading has-text-align-center">Corporate Banking</h4>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">o be the leading catalyst for global digital transformation, driving innovation</p>
                <!-- /wp:paragraph --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns --></div>
                <!-- /wp:group -->',
            ]
        );

      }
    
    }
   
