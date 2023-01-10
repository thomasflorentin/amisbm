<?php 

add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it subjects for your posts

function create_subjects_hierarchical_taxonomy() {

    // Add new taxonomy, make it hierarchical like categories
    //first do the translations part for GUI

    $labels = array(
        'name' => _x( 'Type de Publication', 'taxonomy general name' ),
        'singular_name' => _x( 'Type de publication', 'taxonomy singular name' ),
        'search_items' =>  __( 'Rechercher Type de publication' ),
        'all_items' => __( 'Tous les Types de publication' ),
        'parent_item' => __( 'Type de publication parent' ),
        'parent_item_colon' => __( 'Parent Subject:' ),
        'edit_item' => __( 'Editer Type de publication' ), 
        'update_item' => __( 'Mettre à jour Type de publication' ),
        'add_new_item' => __( 'Ajouter un type de publication' ),
        'new_item_name' => __( 'Nom du nouveau type de publication' ),
        'menu_name' => __( 'Types de publication' ),
    );    

    // Now register the taxonomy
    register_taxonomy('publication_type',array('publication'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'type' ),
    ));
}