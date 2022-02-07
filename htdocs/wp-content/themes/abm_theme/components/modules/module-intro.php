<?php
$title = $args['title'];
$text_content = $args['text_content'];
?>

<section class="mod_intro">
    <h2 class="mod_title FS_45"><?= $title ?></h2>
    <div class="grid">
        <?php
        echo '<div class="m_10col">'; 
        echo $text_content; 
        echo '</div>';
        ?>

    </div>
</section>