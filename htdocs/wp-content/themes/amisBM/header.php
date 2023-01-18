<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header" <?php if(is_user_logged_in()) {echo 'style="top:30px;"';} ?>>
        <div class="header_logo">
            <?php the_custom_logo(); ?>
        </div>

        <div class="header_wrapper">
            <div class="header_searchForm searchForm">
                <?php get_search_form(); ?>
            </div>

            <nav class="header_nav">
                <?php wp_nav_menu('Header nav'); ?>
            </nav>
        </div>
    </header>