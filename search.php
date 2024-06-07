<?php get_header(); ?>

<div class="auto-wrapper">
    <div class="container">
        <h1 class="page-title"><?php
            /* translators: %s: search query. */
            printf( esc_html__( 'Search Results for: %s', 'diditale' ), '<span>' . get_search_query() . '</span>' );
            ?>
        </h1><?php 
        if (have_posts()) : ?>
            <div class="search-container"><?php
                while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="search-items">
                        <div class="search-content">
                            <div class="content-item"><?php
                                // Display the post thumbnail
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('full');
                                } ?>
                                <!-- <img src="https://dw-wp.dev-dw.de/wp-content/uploads/2024/02/Mask-group-4.webp" alt="img"/> -->
                            </div>
                            <div class="content-item">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
                            </div>
                        </div>
                    </a><?php
                endwhile; ?>
                
            </div><?php
        else : ?>
            <div class="not-found">

                <h4><?php _e('Sorry, wir konnten leider keine Einträge finden.', 'diditale'); ?></h4>
                <p><?php _e('Search Suggestions', 'diditale'); ?></p>
                <ul>
                    <li><?php _e('Check your spelling.', 'diditale'); ?></li>
                    <li><?php _e('Try more general words.', 'diditale'); ?></li>
                    <li><?php _e('Try different words that mean the same thing.', 'diditale'); ?></li>
                </ul>
            </div><?php 
        endif; 
        wp_reset_postdata(); ?>

    </div>
</div>

<?php get_footer(); ?>
