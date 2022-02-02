<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abm_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site wrapper">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'abm_theme'); ?></a>

        <header id="masthead" class="site-header header-container grid">
            <div class="site-branding m_1col ">

                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <figure>
                        <img src="<?php the_field('logo_du_site', 'option'); ?>" alt="">
                    </figure>
                </a>
            </div><!-- .site-branding -->



            <nav id="site-navigation" class="main-navigation m_11col">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('header_menu', 'abm_theme'); ?></button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header_menu',
                        'menu_id'        => 'header_menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->

        </header><!-- #masthead -->

        <main id="primary" class="site-main">