</main>

<?php
        if(has_nav_menu('footer-menu')) {
            wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );
        }
    ?>

<footer class='footer'>
    <p>&copy; CopyRight <a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a> AllRights Reserved</p>

</footer>

<?php dynamic_sidebar('footer_sidebar'); ?>

<?php wp_footer(); ?>

</body>
</html>