<?php
    if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<div class="s_3col m_2col l_2col">';
                get_template_part('components/blocs/bloc', 'publication');
            echo '</div>';
        }

    }
    wp_reset_postdata();