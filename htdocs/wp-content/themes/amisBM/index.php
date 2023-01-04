<?php
get_header();
?>

<section class="home_hero">
    <div class="hero--img">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/home-hero.png"; ?>" alt="Image d'introduction de la page d'accueil">
    </div>
    <div class="hero--content">
        <h1>Les Amis de Bourron-Marlotte</h1>
        <p>Bienvenue sur le site des Amis de Bourron-Marlotte ! Découvrez-y la richesse patrimoniale et artistique qui constitue l'essence même de notre village.</p>
    </div>
</section>

<main class="main">
    <section class="home_actus section_padding">
        <h2 class="section_title">Actualités</h2>

        <div class="actus_itemWrapper">
        <?php
        if(have_posts()):
            while(have_posts()):
                the_post();
                get_template_part('template-parts/post/content');
            endwhile;
        endif;
        ?>
        </div>
    </section>

    <section class="home_sujetDuMois section_padding">
        <h2 class="section_title">Sujet du moment</h2>

        <div class="sujetDuMois_wrapper">
            <div class="sujetDuMois_img">
                <img src="http://amisbm/wp-content/uploads/2022/12/sujetdumois.png" alt="">
            </div>

            <div class="sujetDuMois_txt">
                <h3>Un peintre guadeloupéen à Bourron-Marlotte :</h3>
                <p>Après avoir produit plusieurs décorations murales dans divers édifices de Guadeloupe et de Martinique, puis publié l'ouvrage de référence La Guadeloupe Pittoresque, richement illustré par ses soins, Armand Budan (1827-1874) tente sa chance à Paris au début des années 1860. La renommée des artistes bellifontains l'attire à Bourron-Marlotte, où il passera plusieurs années avec sa famille au Pavé du Roy. Peu de ses peintures nous sont parvenues. Budan a ensuite ouvert un atelier de photographie à Paris, avant de finir ses jours en Guadeloupe.</p>
                <button class="mainBtn">Découvrir le sujet</button>
            </div>
        </div>
    </section>

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