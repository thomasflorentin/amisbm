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

                <?php if( get_field('publication_prix') !== '' ) : ?>
                    <div class="separator--dot"></div>
                    <span><?php the_field('publication_prix'); ?> €</span>
                <?php endif; ?>
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


    <section class="publication-content row">

        <?php
            if(has_post_thumbnail()):
                echo '<div class="content_media s_6col m_3col">';
                    the_post_thumbnail('publication');
                echo '</div>'; 
            endif;
        ?>

        <div class="content_text s_6col m_3col">
            <div class="excerpt"><?php the_excerpt(); ?></div>
            <div class="copy"><?php the_content(); ?></div>
        </div>

    </section>

    <section class="publication-action">
        <a href="<?php the_field('page_commandes', 'options'); ?>" class="mainBtn">Commander</a>
    </section>

</article>