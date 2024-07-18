<footer class="footer">
    <div class="container">
        <div class="footer__menu">
            <?php
            if (has_nav_menu('footer_menu'))
                wp_nav_menu(
                    array(
                        'container' => false,
                        'theme_location' => 'footer_menu',
                    )
                );
            ?>
        </div>
        <div class="footer__copyright-txt">
             <?php
                $copyright_text = get_theme_mod('copyright_text');
                if (!empty($copyright_text)): ?>
                    <p><?php echo esc_html($copyright_text);?></p>
                <?php
                    endif;
                ?>
        </div>
    </div>
</footer>

 <!-- Popup HTML -->
 <?php if (is_active_sidebar('footer-widget-area')) : ?>
            <div id="custom-popup" class="popup-overlay">
                <div class="popup-content">
                    <span class="popup-close">&times;</span>
                    
                    <div class="content-body">
                        <?php dynamic_sidebar('footer-widget-area'); ?>
                        <!-- <div class="content-item">
                            <img src="https://via.placeholder.com/150" alt="Special Offer" class="popup-image" />
                        </div>
                        <div class="content-item">
                            <h2>Special Offer!</h2>
                            <p>Get 35% off on your first purchase. Use code: SUMMER35</p>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php endif; ?>


<?php wp_footer();?>

</body>
</html>