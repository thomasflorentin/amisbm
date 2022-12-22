<?php

function amisBM_register_styles(){
    wp_enqueue_style('amisBM_main_style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'amisBM_register_styles');

?>