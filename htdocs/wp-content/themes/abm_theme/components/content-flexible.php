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

        /*
         * LISTE DE BLOC ()
         * (actualités, événements, etc.)
         */
        elseif (get_row_layout() == 'mod_list_page') :

            $mod_title = get_sub_field('mod_title');
            $mod_link = get_sub_field('mod_link');
            $mod_display = get_sub_field('mod_display');
            $mod_auto = get_sub_field('mod_auto');
            $mod_postsperpage = get_sub_field('mod_postsperpage');
            $mod_posttype = get_sub_field('mod_posttype');

            if ($mod_auto) {

                $q_args = array(
                    'posts_per_page'    => $mod_postsperpage,
                    'post_type'         => $mod_posttype,
                    'status'            => 'published',

                );

                if ($mod_posttype === 'event') {
                    setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
                    $today = date('Ymd');

                    $q_args['meta_key'] = 'date';
                    $q_args['orderby'] = 'meta_value_num';
                    $q_args['order'] = 'ASC';
                    $q_args['meta_query'] = array(
                        'key'           => 'date',
                        'value'         => $today,
                        'compare'       => '>=',
                    );
                } else {
                    $q_args['orderby'] = 'date';
                    $q_args['order'] = 'DESC';
                }

                $mod_list_elements = get_posts($q_args);
            } else {
                $mod_list_elements = get_sub_field('mod_list_elements');
            }

            $args = array(
                'mod_title'   => $mod_title,
                'mod_list_elements'   => $mod_list_elements,
                'mod_link'   => $mod_link,
            );

            if ($mod_display == 'actu') {
                get_template_part('components/modules/module', 'list-page', $args);
            } else if ($mod_display == 'event') {
                get_template_part('components/modules/module', 'list-events', $args);
            }


        endif;


    endwhile;

endif;
