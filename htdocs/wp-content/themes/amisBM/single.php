<?php
    get_header();
?>

    <?php
        while(have_posts()):
            the_post();

            get_template_part('components/blocs/bloc', 'hero'); ?>

            <main class="main content_area section_padding">
                <?php get_template_part('components/contents/content', 'post'); ?>
            </main>

    <?php endwhile; ?>


<?php
    get_footer();
?>