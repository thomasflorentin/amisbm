<?php
get_header();
get_template_part('components/blocs/bloc', 'hero');

?>


<main class="main">

	<section class="home_actus section_padding">

			<?php
				if ( have_posts() ) : ?>
					<div class="actus_itemWrapper row" style="margin-bottom: 100px;">

					<?php while ( have_posts() ) :
						the_post();

						get_template_part( 'components/blocs/bloc', get_post_type() );

					endwhile; ?>
					</div>

					<?php the_posts_navigation();


				endif; ?>

	</section>

</main>

<?php
get_footer();
?>