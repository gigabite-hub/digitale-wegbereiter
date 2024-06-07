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

<?php wp_footer();?>

</body>
</html>