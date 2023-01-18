<article id="post-<?php the_ID() ?>">

    <section class="publication-header">
        <?php the_title( '<h1 class="page-title baskerville">', '</h1>' ); ?>

            <div class="post_otherInfos">
                <span><?php the_field('publication_date'); ?></span>
                <div class="separator--dot"></div>
                <?php

                    $term_obj_list = get_the_terms( $post->ID, 'publication_type' );
                    $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
                    echo $terms_string;

                ?>
            </div>

            <?php
                $tags = wp_get_post_tags($post->ID); 
                $html = '<ul class="publication_tags">';
                foreach ( $tags as $tag ) {
                    $html .= "<li>";
                        $html .= "<span>{$tag->name}</span>";
                        $html .=  '<span class="separator--dot"></span>';
                    $html .= "</li>";
                }
                $html .= '</ul>';
                echo $html; ?>

    </section>


    <section class="publication-content">

        <?php
            if(has_post_thumbnail()):
                echo '<div class="content_media">';
                    the_post_thumbnail('publication');
                echo '</div>'; 
            endif;
        ?>

        <div class="content_text">
            <?php the_content(); ?>
        </div>

    </section>

    <section class="publication-action">
        <a href="#" class="mainBtn">Commander</a>
    </section>

</article>