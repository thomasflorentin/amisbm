<article id="post-<?php the_ID() ?>">

    <?php
        the_title( '<h1 class="page-title">', '</h1>' );

        if(has_post_thumbnail()):
            the_post_thumbnail('full'); //full, large, medium or custom size
        endif;
    ?>

    <div class="page-content">
        <?php
            the_content();
        ?>
    </div>

</article>