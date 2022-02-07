<?php
$title = $args['title'];
$text_button = $args['text_button'];
$link_button = $args['link_button'];
$img_banner = $args['img_banner'];
?>

<section class="mod_cover_banner grid" style="background: url(<?= $img_banner ?>);">
    <div class="mod_content_cover m_5col">
        <h2 class="mod_title FS_60 "><?= $title; ?></h2>

        <a class="mod_link_button mod_text_button btn-big" href="<?= $link_button ?>"><?= $text_button ?></a>
    </div>

</section>