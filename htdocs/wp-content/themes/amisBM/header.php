<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header <?php if(is_user_logged_in()) {echo 'class="header fixed-margin-top"';} else {echo 'class="header"';} ?>>
        
        <?php if(!is_front_page()): ?>
        <div class="header_logo">
            <?php the_custom_logo(); ?>
        </div>
        <?php endif; ?>

        <div class="header_wrapper">
            <div class="header_searchForm searchForm">
                <?php get_search_form(); ?>
            </div>

            <div class="header_burger">
                <button style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/ico_burger--white.png"; ?>);"></button>
            </div>

            <nav data-display="hidden" <?php if(is_user_logged_in()) {echo 'class="header_nav fixed-margin-top"';} else {echo 'class="header_nav"';} ?>>
                <?php wp_nav_menu('Header nav'); ?>

                <div class="header_nav_close">
                    <button style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/ico_close.png"; ?>);"></button>
                </div>
            </nav>
        </div>
    </header>