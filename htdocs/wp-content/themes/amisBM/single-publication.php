<?php
    get_header();
?>

<main class="main content_area section_padding">
    <?php
        while(have_posts()):
            the_post();
            get_template_part('components/contents/content', 'publication');

        endwhile;
    ?>
</main>

<?php
    get_footer();
?>