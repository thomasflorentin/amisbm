<article id="post-<?php the_ID(); ?>">
    <!-- Post Thumbnail -->
    <div class="post_thumbnail">
        <?php
        if(has_post_thumbnail() && is_home() || is_archive()):
            the_post_thumbnail('medium'); //full, large, medium or custom size
        endif;
        ?>
    </div>



    <div class="post_content">
        <!-- Post Title -->
        <div class="post_title">
            <?php
            if( ! is_singular()):
                the_title( '<h3 class="post-title"> <a href="' . esc_url( get_permalink() ) . '" class="post-link">', '</a> </h3>' );
            endif;
            ?>
        </div>
    
        <!-- Post Content -->
        <?php if(is_home() || is_archive()): ?>
            <div class="post_resume" style="display: none;"> <!-- ATTENTION : La homepage ne charge pas sans ça même si on ne s'en sert pas -->
                <?php the_excerpt(); ?>
            </div>
    
        <?php elseif(is_singular()): ?>
            <div class="single_content">
                <?php
                    the_content();
    
                    // for the navigation while being on the wp editor
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:'),
                        'after' => '</div>',
                    ));
                ?>
            </div>
        <?php endif; ?>
    
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