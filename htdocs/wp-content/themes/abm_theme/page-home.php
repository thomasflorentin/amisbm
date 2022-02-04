<?php /* 
Template Name: Template Accueil */

get_header();

while (have_posts()) : the_post();

    get_template_part('components/content', 'flexible');

endwhile; 

get_footer();
