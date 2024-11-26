    <footer class="footer">
        
        <div class="subfooter">
            <div class="footer_leftCol">
                <div class="footer_supporters flex">

                    <?php 
                        $images = get_field('footer_logos', 'options');
                        if( $images ):  ?>
                            <?php foreach( $images as $image ): ?>
                                <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endforeach; ?>
                    <?php endif; ?>

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