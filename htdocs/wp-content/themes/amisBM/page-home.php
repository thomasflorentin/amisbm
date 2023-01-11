<?php
/*
    Template Name: Modèle Page d'accueil
*/

get_header();

get_template_part('components/blocs/bloc', 'hero');

?>



<main class="main">

    <?php get_template_part('components/flexibles'); ?>

</main>

<?php
get_footer();
?>