<?php 

function sujetDuMois_register_post_type() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'Sujets du mois',
        'all_items' => 'Toutes les sujets du mois',  // affiché dans le sous menu
        'singular_name' => 'sujetDuMois',
        'add_new_item' => 'Ajouter un sujet du mois',
        'edit_item' => 'Modifier le sujet du mois',
        'menu_name' => 'Sujet du Mois'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail','excerpt'),
        'taxonomies' => array('category', 'post_tag'),
        'rewrite' => array('slug' => 'publication', 'with_front' => true),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-calendar-alt',
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
	);

	register_post_type( 'sujetDuMois', $args );
}
add_action( 'init', 'sujetDuMois_register_post_type' ); // Le hook init lance la fonction