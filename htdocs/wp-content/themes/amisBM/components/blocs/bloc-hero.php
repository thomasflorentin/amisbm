




<section class="<?php echo is_front_page() ? 'home_hero' : 'post_hero'; ?>">
    <div class="hero--img">
        <?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail('hero');  
            } 
            else { 

                $images = get_field('hero_images', get_option('page_on_front'));
            
                $size = 'hero'; 
                if( $images ): ?>
                    <ul class="slider">
                        <?php foreach( $images as $image_id ): ?>
                            <li class="slide">
                                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            <?php } ?>
    </div>
    <div class="hero--content">
        <?php 
            
            if( is_front_page() ) { ?>
                <h1 class="baskerville hero_title"><?php the_field('page_title'); ?></h1>
                <p><?php the_field('page_introduction'); ?></p>
            <?php } else {
                the_title( '<h1 class="single-title baskerville hero_title">', '</h1>' ); 
            }
        ?>
        
    </div>
</section>