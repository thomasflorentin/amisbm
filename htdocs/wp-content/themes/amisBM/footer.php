    <footer class="footer">
        
        <div class="subfooter">
            <div class="footer_leftCol">
                <div class="footer_supporters">
                    <img style="padding: 10px" src="<?php echo get_template_directory_uri() . "/assets/images/Logo_ABM.png"; ?>" alt="Logo du département de Seine-et-Marne">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/logo_BM.png"; ?>" alt="Logo de la mairie de Bourron-Marlotte">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/logo_77.png"; ?>" alt="Logo du département de Seine-et-Marne">
                </div>
            </div>

            <div class="footer_rightCol">
                <span><?php the_field('infos_footer', 'options'); ?></span>
            </div>
        </div>

        <div  class="underfooter">
            <?php wp_nav_menu( array(
                'theme_location' => 'footer',
                )); ?>
        </div>
    </footer>
        
    <?php wp_footer(); ?>
</body>
</html>