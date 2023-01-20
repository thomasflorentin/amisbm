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

    <div class="posts_navigation">
        <div><?php previous_posts_link( 'Publications plus anciennes' ); ?></div>
        <div><?php next_posts_link( 'Publications plus récentes', $the_query->max_num_pages ); ?></div>
    </div>
</section>

<?php echo "<script type='text/javascript'>const ajaxurl = '".admin_url('admin-ajax.php')."'</script>"; ?>
