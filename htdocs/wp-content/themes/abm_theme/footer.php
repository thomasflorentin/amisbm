</main><!-- #main -->

<footer id="colophon" class="site-footer grid">
    <div class="footer-branding m_2col ">

        <a href="<?php echo esc_url(home_url('/')); ?>">
            <figure>
                <img src="<?= get_field('logo_footer', 'option'); ?>" alt="">
            </figure>
        </a>
    </div><!-- .site-branding -->

    <div class="footer-infos  m_2col">
            <?= get_field('infos_footer', 'option'); ?>
    </div>

    <nav id="footer-navigation" class="footer-navigation m_5col">
                <button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php esc_html_e('footer_menu', 'abm_theme'); ?></button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_menu',
                        'menu_id'        => 'footer_menu',
                        'add_li_class'  => 'btn_inline'   
                    )
                );
                ?>
            </nav><!-- #site-navigation -->


    <div class="newsletter-form m_3col">
            <form action="">
                <label for="" class="btn_inline FS_20_B">Restez informé </label>
                <input type="text" class="input">
                <input class="btn-medium" type="submit" value="s'inscrire">
            </form>
    </div>
</footer>
</div>

</body>

</html>