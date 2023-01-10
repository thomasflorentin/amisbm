<?php 

function sujets_register_post_type() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'Sujets',
        'all_items' => 'Tous les sujet du moment',  // affiché dans le sous menu
        'singular_name' => 'Sujet',
        'add_new_item' => 'Ajouter un Sujet',
        'edit_item' => 'Modifier le Sujets',
        'menu_name' => 'Sujets du moment'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail','excerpt'),
        'taxonomies' => array('category', 'post_tag'),
        'rewrite' => array('slug' => 'sujet', 'with_front' => true),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-book-alt',
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
	);

	register_post_type( 'sujet', $args );
}
add_action( 'init', 'sujets_register_post_type' ); // Le hook init lance la fonction