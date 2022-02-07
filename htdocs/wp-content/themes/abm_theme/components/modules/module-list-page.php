<?php
$mod_title = $args['mod_title'];
$mod_list_elements = $args['mod_list_elements'];
$mod_link = $args['mod_link'];

//var_dump($mod_list_elements);
?>

<section class="mod_list_page">
    <h2 class="mod_title FS_45"><?= $mod_title ?></h2>
    <section class="item-list-container grid">
        <?php foreach ($mod_list_elements as $post) :

            setup_postdata($post);
            get_template_part('components/blocs/bloc', 'event');
        endforeach; ?>
    </section>

</section>