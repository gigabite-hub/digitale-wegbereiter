<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        
    <div class="container">
            
           
            <div class="missions__row">
               
                <div class="mission__card-column">
                    <div class="mission__card-item">
                        <div class="mission__card-image">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </div>
                        <div class="mission__card-content">
                            <h3><?php the_title();?></h3>
                            <p><?php the_excerpt();?></p>
                            <!-- <a href="<?php the_permalink();?>">Read More</a> -->
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </header><!-- .entry-header -->


    <footer class="entry-footer">
        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php
                printf(
                    '<span class="posted-on"><a href="%1$s">%2$s</a></span>',
                    esc_url( get_permalink() ),
                    esc_html( get_the_date() )
                );
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
