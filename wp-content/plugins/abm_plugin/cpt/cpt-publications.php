<?php 

function publications_register_post_type() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'Publications',
        'all_items' => 'Toutes les publications',  // affiché dans le sous menu
        'singular_name' => 'Publication',
        'add_new_item' => 'Ajouter une Publication',
        'edit_item' => 'Modifier la Publication',
        'menu_name' => 'Publications'
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
        'menu_icon' => 'dashicons-book-alt',
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
	);

	register_post_type( 'publication', $args );
}
add_action( 'init', 'publications_register_post_type' ); // Le hook init lance la fonction