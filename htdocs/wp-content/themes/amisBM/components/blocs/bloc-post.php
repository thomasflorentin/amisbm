<article class="" id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" class="link-block">
        <div class="post_thumbnail">
            <?php
            if(has_post_thumbnail()):
                the_post_thumbnail('bloc'); //full, large, medium or custom size
            endif;
            ?>
        </div>

        <div class="post_content">

            <?php 
                
                if( is_search() ) {
                    $post_type = $post->post_type;

                    switch ($post_type) {
                        case 'post':
                            echo "<span>Actualité / Evénement</span>";
                            break;

                        case 'publication':
                            echo "<span>Publication</span>";
                            break;                   
                
                        case 'sujet':
                            echo "<span>Sujet du moment</span>";
                            break;

                        default:
                            echo "<span>Page</span>";
                            break;
                    }
                }

            ?>

            <!-- Post Title -->
            <div class="post_title">
                <?php the_title( '<h3 class="post-title">', '</h3>' ); ?>
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