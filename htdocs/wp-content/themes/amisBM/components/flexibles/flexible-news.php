<?php 
/*
    Flexible 
*/
?>

<section class="home_actus section_padding">
    <h2 class="h2 sectionTitle_margins"><?php the_sub_field('section_title'); ?></h2>
            
    <div class="actus_itemWrapper row">

    <?php
        if( $section_items ): ?>
            <?php foreach( $section_items as $post ): 
                setup_postdata($post);
                echo '<div class="s_6col m_3col l_2col">';
                    get_template_part('components/blocs/bloc', 'post');
                echo '</div>';
            endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>
</section>