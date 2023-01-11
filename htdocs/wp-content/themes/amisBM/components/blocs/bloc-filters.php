<section class="publications_filters section_padding">

    <div class="filters_group">
        <button class="mainBtn publication-filter active" data-term="all">Tous</button>
        <?php 
        $types = get_terms( array(
            'taxonomy' => 'publication_type',
            'hide_empty' => false
        ) );
        
        if ( !empty($types) ) :
            foreach( $types as $term ) {

                $output = '<button class="mainBtn publication-filter" data-term="' . $term->slug . '" data-termID="' . $term->term_id . '">';
                $output.= esc_attr( $term->name );
                $output.='</button>';
                echo $output;
            }
        endif; ?>
    </div>

    <div class="filters_action">
        <a href="#" class="mainBtn"><?php printf('Commander'); ?></a>
    </div>

</section>