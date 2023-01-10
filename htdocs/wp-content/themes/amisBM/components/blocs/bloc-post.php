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
                <?php
                    $categories = get_the_category();

                    if ( ! empty( $categories ) ) {
                        echo "<span class='post_type'>" . esc_html( $categories[0]->name ) . "</span>";	
                    } 

                    if( get_field('is_event') ) {
                        echo '<div class="separator--dot"></div>';
                        echo '<span class="post_date">' . get_event_date(get_field('event_date')) . '</span>';
                    }
                ?>
                
            </div>
        </div>
    </a>
</article>