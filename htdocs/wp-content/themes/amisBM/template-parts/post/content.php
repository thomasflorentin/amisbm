<article id="post-<?php the_ID(); ?>">
    <!-- Post Thumbnail -->
    <?php
    if(has_post_thumbnail()):
        the_post_thumbnail('medium'); //full, large, medium or custom size
    endif;
    ?>

    <!-- Post Title -->
    <div class="post-content">
        <?php
        if(is_singular()):
            the_title( '<h1 class="single-title">', '</h1>' );
        else:
            the_title( '<h3 class="post-title"> <a href="' . esc_url( get_permalink() ) . '" class="post-link">', '</a> </h3>' );
        endif;
        ?>
    </div>

    <!-- Post Content -->
    <?php if(is_home() || is_archive()): ?>
        <div class="post-content">
            <?php the_excerpt(); ?>
        </div>

    <?php elseif(is_singular()): ?>
        <div class="single-content">
            <?php
                the_content();

                // for the navigation while being on the wp editor
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ninestars' ),
                    'after' => '</div>',
                ));
            ?>
        </div>
    <?php endif; ?>
</article>