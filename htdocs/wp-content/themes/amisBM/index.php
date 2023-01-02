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
        <?php
        if(have_posts()):
            while(have_posts()):
                the_post();
                get_template_part('template-parts/post/content');
            endwhile;
        endif;
        ?>
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
</main>

<?php
get_footer();
?>