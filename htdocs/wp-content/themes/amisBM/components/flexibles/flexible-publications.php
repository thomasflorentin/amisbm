<section class="home_publications">
    <div class="publications--bgdImg">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/home-publication.jpg"; ?>" alt='Image de fond de la section "les publications"'>
    </div>

    <div class="publications--content section_padding">
        <h2 class="section_title section_title--light"><?php the_sub_field('section_title'); ?></h2>
    
        <div class="publications_txtWrapper">
            <p><?php the_sub_field('section_p1'); ?></p>
            <p><?php the_sub_field('section_p2'); ?></p>
        </div>
    
        <button class="mainBtn">Voir toutes les publications</button>
    </div>
</section>