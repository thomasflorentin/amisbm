<?php
    get_header();
?>

<div class="archive-content">

    <?php if(have_posts()): ?>
        <header class="archive-page-header">
            <?php
            the_archive_title( '<h1 class="archive-title">', '</h1>' );
            the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
        </header>

        <?php
        while(have_posts()):
            the_post();
            get_template_part('template-parts/post/content');
        endwhile;

        echo paginate_links([
            'prev_text' => esc_html__('Précédent'),
            'next_text' => esc_html__('Suivant')
        ])
        ?>

    <?php
    else:
        get_template_part('template-parts/page/content', 'none');
    endif;
    ?>
        
</div>

<?php
    get_footer();
?>