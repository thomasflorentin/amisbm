<?php
    get_header();
?>

<main class="serach-content">

    <h1>Recherche</h1>
    <?php get_search_form() ?>

    <?php if(have_posts()): ?>
        <h2>Actualités</h2>

        <?php
        while(have_posts()):
            the_post();
            get_template_part('template-parts/post/content', 'post');
        endwhile;

        echo paginate_links([
            'prev_text' => esc_html__('Précédent'),
            'next_text' => esc_html__('Suivant')
        ])
        ?>

    <?php else: ?>
        <h3>Désolé, aucun résultat ne correspond à votre recherche</h3>
    <?php endif; ?>
        
</main>

<?php
    get_footer();
?>