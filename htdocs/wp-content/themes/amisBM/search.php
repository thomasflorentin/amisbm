<?php
    get_header();
    global $wp_query;
    $total_results = $wp_query->found_posts;

?>



<main class="main no-hero section_padding search-content">

    <div class="search_introSection">
        <h1 class="section_title">Recherche</h1>
    
        <div class="main_searchForm searchForm">
            <?php get_search_form() ?>
        </div>
        
        <span><?php echo $total_results; ?> résultat(s)</span>
    </div>


    <?php if(have_posts()): ?>
    
        <div class="actus_itemWrapper ">


            <?php
            while(have_posts()):
                the_post();
                get_template_part('components/blocs/bloc', 'post');

            endwhile;

            echo paginate_links([
                'prev_text' => esc_html__('Précédent'),
                'next_text' => esc_html__('Suivant')
            ])
            ?>
        </div>

    <?php else: ?>
        <h3>Désolé, aucun résultat ne correspond à votre recherche</h3>
    <?php endif; ?>
        
</main>

<?php
    get_footer();
?>