<?php
get_header();
get_template_part('components/blocs/bloc', 'hero');

?>


<main class="main">

<section class="home_actus section_padding">
    <h2 class="h2 sectionTitle_margins"><?php the_sub_field('section_title'); ?></h2>
            
    <div class="actus_itemWrapper">


    <?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'components/blocs/bloc', get_post_type() );

			endwhile;

			the_posts_navigation();


		endif;
		?>

    </div>
</section>






</main>

<?php
get_footer();
?>