<article id="post-<?php the_ID(); ?>">

    <?php 
    $categories = get_the_category();
    ?>

    <?php if( get_field('is_event') ) : ?>

        <div class="single_event_meta">
            <?php 
                if ( ! empty( $categories ) ) { 
                    echo "<div class='single_type'><span class='greyFont'>Type d'événement : </span>" . esc_html( $categories[0]->name ) . "</div>";	
                } 
            ?>
            <div class="single_date">
                <span class="greyFont">Date & horaire : </span>
                <?php the_event_date(get_field('event_date')); ?>
            </div>

            <div class="single_date">
                <span class="greyFont">Lieu : </span>
                <?php the_event_date(get_field('event_date')); ?>
            </div>
        </div>

    <?php endif; ?>
    

    <?php if( has_excerpt() ) : ?>
        <div class="single_excerpt">
            <?php the_excerpt(); ?>
        </div>
    <?php endif; ?>



    <div class="single_content">
        <?php the_content(); ?>
    </div>


</article>