<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <!-- Matomo -->
    <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="//stats.thomasflorentin.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '2']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
    </script>
    <!-- End Matomo Code -->
    
</head>

<body <?php body_class(); ?>>

    <header class="header<?php if(is_user_logged_in()) {echo ' fixed-margin-top';}?>">
        <div class="header_searchForm searchForm">
            <?php get_search_form(); ?>
        </div>

        <div class="header_wrapper">
            <div class="header_burger">
                <button style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/ico_burger--white.png"; ?>);"></button>
            </div>

            <nav data-display="hidden" class="header_nav">
            <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            )); ?>
                <div class="header_nav_close">
                    <button style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/ico_close.png"; ?>);"></button>
                </div>
            </nav>
        </div>
    </header>