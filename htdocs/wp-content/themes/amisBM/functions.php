<?php

if (!function_exists('ABM_setup')){
    function ABM_setup() {
        // Lets WP manage the document title
        add_theme_support('title-tag');

        // Enables support for post thumbnails
        add_theme_support('post-thumbnails');

        // Enables support for switching the logo from the theme customizer
        add_theme_support('custom-logo', [
            'height' => 100,
            'width' => 100,
            'flex-width' => true,
            'flex-height' => true
        ]);

        // Enables support for setting header images from the theme customizer
        add_theme_support('custom-header', [
            'height' => 450,
            'width' => 1600,
            'flex-width' => true,
            'flex-height' => true,
            'default-image' => ''
        ]);

        // Lets us register menus in the wp back office
        register_nav_menus([
            'primary' => 'Header nav'
        ]);

        add_image_size( 'hero', 1500 ); // 1500 pixels wide (and unlimited height)
        add_image_size( 'bloc', 400 ); 
        add_image_size( 'publication', 600 ); 

    }
}
add_action( 'after_setup_theme', 'ABM_setup' );


function ABM_public_scripts() {
    // Styles
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], rand(), 'all');
    wp_enqueue_style('header and footer', get_template_directory_uri() . '/assets/css/header-footer.css', [], rand(), 'all');

    // Scripts
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], rand(), true);
    wp_localize_script('main', 'ajax_var', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'wp-pageviews-nonce' ),
    ));

}
add_action( 'wp_enqueue_scripts', 'ABM_public_scripts' );

function ABM_admin_scripts() {
    
}
add_action( 'admin_enqueue_scripts', 'ABM_admin_scripts' );



// links the custom-shortcodes.php file
include('custom-shortcodes.php');

include('inc/template-functions.php');





/*
 * Ajouter des styles en admin
 */

 function wptutsplus_admin_styles() {
	wp_register_style( 'abm_admin_stylesheet', get_template_directory_uri() . '/assets/css/admin-style.css' );
	wp_enqueue_style( 'abm_admin_stylesheet' );
}
add_action( 'admin_enqueue_scripts', 'wptutsplus_admin_styles' );





/*
 * Ajax Functions
 */

    add_action("wp_ajax_loadpublications", "loadpublications");
    add_action("wp_ajax_nopriv_loadpublications", "loadpublications");

    function loadpublications() {

        $term = $_POST['term'];
        $termID = $_POST['termID'];

        $args = array( 
            'post_type' => 'publication',
            'posts_per_page' => 12,
        );

        if( $term != "all" ) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'publication_type',
                    'field'    => 'term_id',
                    'terms'    => array( $termID ),
                )
            );
        }

        $the_query = new WP_Query( 
            $args
        );

        ob_start();

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    get_template_part('components/blocs/bloc', 'publication');
                }
            } else {
                echo "<h2>Désolé, nous n'avons rien trouvé...</h2>";
            }

            wp_reset_postdata();

        $response = ob_get_clean();
        die(json_encode($response));
    }


?>