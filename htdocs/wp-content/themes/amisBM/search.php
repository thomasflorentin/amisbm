<?php
    get_header();
    global $wp_query;
    $total_results = $wp_query->found_posts;
?>



<main class="main no-hero section_padding search-content">

    <div class="search_introSection">
        <h1 class="h1 sectionTitle_margin">Recherche : </h1>
        <span class="results_searchQuery"><?php echo get_search_query(); ?></span>
    
        <div class="main_searchForm searchForm">
            <?php get_search_form() ?>
        </div>

        <span><?php echo $total_results; ?> résultat(s)</span>
    </div>


    <?php if(have_posts()): ?>
    
        <div class="actus_itemWrapper row">


            <?php
            while(have_posts()):
                the_post();
                if( get_post_type() === 'publication' ) {
                    echo "<div class='s_6col m_3col l_2col'>";
                    get_template_part('components/blocs/bloc','publication' );
                    echo "</div>";

                }
                else {
                    get_template_part('components/blocs/bloc', 'post');

                }

            endwhile;
            ?>

            <div class="archive-nav s_6col m_6col l_6col">
                <?php
                echo paginate_links([
                    'prev_text' => esc_html__('Précédent'),
                    'next_text' => esc_html__('Suivant')
                ])
                ?>
            </div>
        </div>

    <?php else: ?>
        <h3>Désolé, aucun résultat ne correspond à votre recherche</h3>
    <?php endif; ?>
        
</main>

<?php
    get_footer();
?>