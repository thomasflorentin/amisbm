<section class="home_sujetDuMois section_padding">
                    <h2 class="section_title"><?php the_sub_field('section_title'); ?></h2>

                    <div class="sujetDuMois_wrapper">
                        <!-- ICI, mettre un Champ ACF OBJET POST-->
                        <?php
                        if( $section_item ):
                            setup_postdata($section_item); ?>

                            <div class="sujetDuMois_img">
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <div class="sujetDuMois_txt">
                                <?php the_title( "<h3>", "</h3>") ?>
                                <p><?php the_excerpt(); ?></p>
                                <button class="mainBtn">Découvrir le sujet</button>
                            </div>

                            <?php wp_reset_postdata();
                        endif; ?>
                    </div>
</section>