<section class="section_padding">
    
    <?php 

    $the_query = new WP_Query( 
        array( 
            'post_type' => 'publication',
            'posts_per_page' => 12,
        ) 
    );

    if ( $the_query->have_posts() ) {
        echo '<div id="publications_posts" class="actus_itemWrapper">';

        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part('components/blocs/bloc', 'publication');
        }
        echo '</div>';

    }
    wp_reset_postdata(); ?>

</section>

<?php echo "<script type='text/javascript'>const ajaxurl = '".admin_url('admin-ajax.php')."'</script>"; ?>
