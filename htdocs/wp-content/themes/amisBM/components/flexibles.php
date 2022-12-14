<?php 

// Check value exists.
    if( have_rows('sections_flexibles') ):

        // Loop through rows.
        while ( have_rows('sections_flexibles') ) : the_row();

            if( get_row_layout() == 'section_news' ):
                $section_items = get_sub_field('section_items');

                set_query_var( 'section_items', $section_items);
                get_template_part('components/flexibles/flexible', 'news');


            elseif( get_row_layout() == 'section_sujet' ):
                $section_item = get_sub_field('section_item');

                set_query_var( 'section_item', $section_item);
                get_template_part('components/flexibles/flexible', 'sujet');


            elseif( get_row_layout() == 'section_publications' ):
                get_template_part('components/flexibles/flexible', 'publications');

            elseif( get_row_layout() == 'section_joinUs' ):
                get_template_part('components/flexibles/flexible', 'join');


            endif;

        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;
?>  