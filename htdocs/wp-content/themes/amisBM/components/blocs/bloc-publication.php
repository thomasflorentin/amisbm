<article class="" id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>">
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

            <!-- Post Meta-Datas -->
            <div class="post_otherInfos">
                <span><?php the_field('publication_date'); ?></span>
                <div class="separator--dot"></div>
                <?php

                    $term_obj_list = get_the_terms( $post->ID, 'publication_type' );
                    $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
                    echo $terms_string;

                ?>
            </div>
        </div>
    </a>
</article>