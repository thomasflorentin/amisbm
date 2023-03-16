<section class="publications_filters section_padding">

    <div class="filters_group">
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
        <?php $cta_url = get_field('cta_url'); ?>
        <a href="<?php echo get_the_permalink( $cta_url[0]->ID ); ?>" class="mainBtn"><?php the_field('cta_label'); ?></a>
    </div>

</section>