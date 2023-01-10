<?php
/*
    Template Name: Modèle Page d'accueil
*/

get_header();
?>

<section class="home_hero">
    <div class="hero--img">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/home-hero.png"; ?>" alt="Image d'introduction de la page d'accueil">
    </div>
    <div class="hero--content">
        <h1><?php the_field('page_title'); ?></h1>
        <p><?php the_field('page_introduction'); ?></p>
    </div>
</section>





<main class="main">

    <?php get_template_part('components/flexibles'); ?>

</main>

<?php
get_footer();
?>