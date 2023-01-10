<?php
/*
    Template Name: Archives Publications
*/

get_header();
?>

<main class="main no-hero">

    <article id="post-<?php the_ID() ?>">

        <section class="section_padding">

            <?php
                the_title( '<h1 class="page-title">', '</h1>' );
            ?>

            <div class="page-content">
                <?php
                    the_content();
                ?>
            </div>
        </section>



        <section class="publications_filters section_padding">

            <div class="filters_group">
                <button class="mainBtn" data-term="all">Tous</button>
                <?php 
                $types = get_terms( array(
                    'taxonomy' => 'publication_type',
                    'hide_empty' => false
                ) );
                
                if ( !empty($types) ) :
                    foreach( $types as $term ) {
                        $output = '<button class="mainBtn" data-term="' . $term->slug . '">';
                        $output.= esc_attr( $term->name );
                        $output.='</button>';
                        echo $output;
                    }
                endif; ?>
            </div>

            <div class="filters_action">
                <a href="#" class="mainBtn">Commander</a>
            </div>

        </section>


        <?php get_template_part('components/archives/archives', 'publications'); ?>

    </article>

</main>

<?php
get_footer();
?>