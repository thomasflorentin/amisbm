<?php
/*
    Template Name: Archives Publications
*/

get_header();
?>

<main class="main no-hero">

    <article id="post-<?php the_ID() ?>">

        <section class="section_padding">

            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </section>


        <?php get_template_part('components/blocs/bloc', 'filters'); ?>

        <?php get_template_part('components/archives/archives', 'publications'); ?>

    </article>

</main>

<?php
get_footer();
?>