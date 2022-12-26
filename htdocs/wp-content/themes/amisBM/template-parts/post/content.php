<article id="post-<?php the_ID(); ?>">
    <!-- Post Thumbnail -->
    <?php
    if(has_post_thumbnail()):
        the_post_thumbnail('large'); //full, large, medium or custom size
    endif;
    ?>

    <!-- Post Content -->
    <div class="post-content">
        <?php the_title( '<h3 class="post-title"> <a href="' . esc_url( get_permalink() ) . '" class="post-link">', '</a> </h3>' ); ?>
    </div>
    <!-- Post Content -->
    <div class="post-content">
        <?php the_excerpt(); ?>
    </div>
</article>