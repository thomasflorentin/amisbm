<section class="section_items section_padding">
    
    <?php 

    $args = array( 
        'post_type' => 'publication',
        'posts_per_page' => 12,
    );

    $args['paged'] = get_query_var( 'paged' ) 
    ? get_query_var( 'paged' ) 
    : 1;

    $the_query = new WP_Query( 
        $args
    );

    echo '<div id="publications_posts" class="publications_itemWrapper row">';
        set_query_var('the_query', $the_query);
        get_template_part('components/loops/loop', 'publications');
    echo '</div>';

 ?>

    <div id="posts_nav" class="posts_navigation">
        <div><?php previous_posts_link( 'Page précédente' ); ?></div>
        <div><?php next_posts_link( 'Page suivante', $the_query->max_num_pages ); ?></div>
    </div>
    
    <button id="loadMore" class="mainBtn hidden">Voir plus de publications</button>

</section>

<?php echo "<script type='text/javascript'>const ajaxurl = '".admin_url('admin-ajax.php')."'</script>"; ?>
