<?php
    get_header();
?>

<section class="home_hero">
    <div class="hero--img">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/home-hero.png"; ?>" alt="Image d'introduction de la page d'accueil">
    </div>
    <div class="hero--content">
        <?php the_title( '<h1 class="single-title">', '</h1>' ); ?>
    </div>
</section>

<main class="main content_area section_padding">
    <?php
        while(have_posts()):
            the_post();
            get_template_part('components/contents/content', 'post');

        endwhile;
    ?>
</main>

<?php
    get_footer();
?>