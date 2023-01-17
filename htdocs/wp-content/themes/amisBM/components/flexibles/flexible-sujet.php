<section class="home_sujetDuMois section_padding">
                    <h2 class="section_title"><?php the_sub_field('section_title'); ?></h2>

                    <div class="sujetDuMois_wrapper">
                        <?php
                        if( $section_item ):

                            foreach( $section_item as $post ): 

                                setup_postdata($post); ?>
      
                                <div class="sujetDuMois_img">
                                    <?php the_post_thumbnail('publication'); ?>
                                </div>

                                <div class="sujetDuMois_txt">
                                    <div class="sujetDuMois_txt_content">
                                        <?php the_title( "<h3>", "</h3>") ?>
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="mainBtn">Découvrir le sujet</a>
                                </div>

                            <?php endforeach; ?>

                        <?php wp_reset_postdata();
                        endif; ?>
                    </div>
</section>