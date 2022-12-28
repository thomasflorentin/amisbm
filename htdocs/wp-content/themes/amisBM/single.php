<?php
    get_header();
?>

<main class="content_area">
    <?php
        while(have_posts()):
            the_post();
            get_template_part('template-parts/post/content');
        endwhile;
    ?>
</main>

<?php
    get_footer();
?>