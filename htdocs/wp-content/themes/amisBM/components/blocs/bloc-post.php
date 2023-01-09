<article class="" id="post-<?php the_ID(); ?>">
    <div class="post_thumbnail">
        <?php
        if(has_post_thumbnail()):
            the_post_thumbnail('medium'); //full, large, medium or custom size
        endif;
        ?>
    </div>

    <div class="post_content">
        <!-- Post Title -->
        <div class="post_title">
            <?php the_title( '<h3 class="post-title"> <a href="' . esc_url( get_permalink() ) . '" class="post-link">', '</a> </h3>' ); ?>
        </div>
        
        <!-- Post Link -->
        <a href="<?php the_permalink(); ?>">Lire la suite</a>

        <!-- Post Meta-Datas -->
        <?php if(is_home()): ?>
            <div class="post_otherInfos">
                <span class="post_type">Évènement</span>
                <div class="separator--dot"></div>
                <!-- Attention : date seulement pour les évents -->
                <span class="post_date">15 Mars 2022</span>
            </div>
        <?php endif; ?>
    </div>
</article>