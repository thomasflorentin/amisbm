<?php
    get_header();
?>

<main class="page-content">
    <?php
    while(have_posts()):
        the_post();
        get_template_part('template-parts/page/content', 'page');
    endwhile;
    ?>
</main>

<?php
    get_footer();
?>