<section class="home_publications">
    <div class="publications--bgdImg">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/home-publication.jpg"; ?>" alt='Image de fond de la section "les publications"'>
    </div>

    <div class="publications--content section_padding">
        <h2 class="h2--light sectionTitle_margins"><?php the_sub_field('section_title'); ?></h2>
    
        <div class="publications_txtWrapper">
            <p><?php the_sub_field('section_p1'); ?></p>
            <p><?php the_sub_field('section_p2'); ?></p>
        </div>
    
        <?php 
            $section_link = get_sub_field('section_link');
            if( $section_link ): ?>
                <a class="mainBtn--darkBgd" href="<?php the_permalink( $section_link->ID); ?>"><?php the_sub_field('section_link_label'); ?></a>
        <?php endif; ?>

    </div>
</section>