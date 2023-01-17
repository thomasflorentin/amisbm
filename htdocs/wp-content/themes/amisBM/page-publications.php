<?php
/*
    Template Name: Archives Publications
*/

get_header();
?>

<main class="main no-hero">

    <article id="post-<?php the_ID() ?>">

        <section class="section_padding">

            <?php the_title( '<h1 class="page-title section_title--bigger">', '</h1>' ); ?>

            <!-- <div class="page_intro">
                <p><strong>Depuis ses débuts et ce chaque année, l'association publie bulletins, catalogues et livres chroniquant sa vie, celle du village ainsi que son histoire.</strong></p>
                <p>Vous pouvez vous procurez ces publications - selon disponibilité -  au prix de xx € l'exemplaire via notre formulaire de commande.</p>
                <p>Pour envoi par la poste, les frais de ports sont en sus et dépendent du nombre d'ouvrages commandés.</p>
            </div> -->

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