<?php

// [theme_assets_dir image="something.jpg"]
function theme_assets_dir_func($atts){
    return get_template_directory_uri() . '/assets/' . $atts;
}
add_shortcode( 'theme_assets_dir', 'theme_assets_dir_func');

?>