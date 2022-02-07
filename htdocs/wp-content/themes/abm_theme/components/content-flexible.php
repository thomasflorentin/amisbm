<?php


if (have_rows('flex_content')) :


    while (have_rows('flex_content')) : the_row();

        /*
         * BLOCS IMG BANNER COVER
         * (cf. Accueil)
         */
        if (get_row_layout() == 'mod_cover_banner') :

            $title = get_sub_field('mod_title');
            $text_button = get_sub_field('mod_text_button');
            $link_button = get_sub_field('mod_link_button');
            $img_banner = get_sub_field('mod_img_banner');

            $args = array(
                'title'   => $title,
                'text_button'   => $text_button,
                'link_button'   => $link_button,
                'img_banner'   => $img_banner
            );

            get_template_part('components/modules/module', 'banner-cover', $args);

        /*
         * BLOCS INTRO
         * (cf. Accueil)
         */
        elseif (get_row_layout() == 'mod_intro') :

            $title = get_sub_field('mod_title');
            $text_content = get_sub_field('mod_content');

            $args = array(
                'title'   => $title,
                'text_content'   => $text_content
            );

            get_template_part('components/modules/module', 'intro', $args);
        endif;


    endwhile;

endif;
