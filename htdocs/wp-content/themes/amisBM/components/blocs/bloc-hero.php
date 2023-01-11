




<section class="<?php echo is_front_page() ? 'home_hero' : 'post_hero'; ?>">
    <div class="hero--img">
        <?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail('full');  
            } 
            else { ?>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/home-hero.png"; ?>" alt="Image d'introduction de la page d'accueil">

            <?php } ?>
    </div>
    <div class="hero--content">
        <?php 
            
            if( is_front_page() ) { ?>
                <h1><?php the_field('page_title'); ?></h1>
                <p><?php the_field('page_introduction'); ?></p>
            <?php } else {
                the_title( '<h1 class="single-title">', '</h1>' ); 
            }
        ?>
        
    </div>
</section>