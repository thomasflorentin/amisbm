<?php
 $title = $args['title'];
 $text_button = $args['text_button'];
 $link_button = $args['link_button'];
 $img_banner = $args['img_banner'];
?>

<section class="mod_cover_banner">
    <figure class="mod_img_banner">
        <img src="<?= $img_banner ?>" alt=""> 
    </figure>

    <h2 class="mod_title"><?= $title; ?></h2>

    <a class="mod_link_button mod_text_button" href="<?= $link_button ?>"><?= $text_button ?></a>

</section>