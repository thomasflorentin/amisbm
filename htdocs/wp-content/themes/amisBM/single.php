<?php
    get_header();
?>
<section class="post_hero">
    <div class="hero--img">
        <?php the_post_thumbnail('full'); ?>
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