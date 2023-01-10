<section class="section_padding">
    
    <?php 

    $the_query = new WP_Query( 
        array( 
            'post_type' => 'publication',

        ) 
    );


    if ( $the_query->have_posts() ) {
        echo '<div class="actus_itemWrapper">';

        while ( $the_query->have_posts() ) {
            $the_query->the_post();

                get_template_part('components/blocs/bloc', 'publication');
        }
        echo '</div>';

    } else {
        // no posts found
    }
    wp_reset_postdata(); ?>

</section>