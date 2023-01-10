<section class="home_join section_padding">
    <h2 class="join_txt"><?php the_sub_field('section_p'); ?></h2>

    <div class="join_btnWrapper">
        <?php 
            $section_link = get_sub_field('section_link');
            if( $section_link ): ?>
                <a class="mainBtn" href="<?php the_permalink( $section_link->ID); ?>">Rejoindre l'association</a>
        <?php endif; ?>
    </div>
</section>