<?php

get_header();
?>

<?php

 while(have_posts()):
    the_post();
?>


<section class="single_portfolio--details">
    <div class="container">
        <?php the_content();?>
    </div>
</section>



<?php endwhile;?>

<?php get_footer(); ?>