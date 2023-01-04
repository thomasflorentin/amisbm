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


   

    <section class="home_publications">
        <div class="publications--bgdImg">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/home-publication.jpg"; ?>" alt='Image de fond de la section "les publications"'>
        </div>

        <div class="publications--content section_padding">
            <h2 class="section_title section_title--light">Les Publications</h2>
    
            <div class="publications_txtWrapper">
                <p>Depuis bientôt 70 ans, l'association contribue à la découverte de l'histoire de Bourron-Marlotte, de ses habitants, à la mise en valeur des sites et des monuments, à l'animation culturelle et à la promotion du village.</p>
                <p>Nous accueillons tous les bénévoles passionnés et amoureux de Bourron-Marlotte, avec qui nous pourrons poursuivre la découverte des riches éléments patrimoniaux qui nous entourent.</p>
            </div>
    
            <button class="mainBtn">Voir toutes les publications</button>
        </div>
    </section>

    <section class="home_join section_padding">
        <h2 class="join_txt">Envie de vous impliquer ou simplement envie de devenir un ami de Bourron et de soutenir nos activités ?</h2>

        <div class="join_btnWrapper">
            <button class="mainBtn">Rejoindre l'association</button>
        </div>
    </section>
</main>

<?php
get_footer();
?>