<?php

/*
 * Formatage dates ACF 
 */
if (!function_exists('get_event_date')){
    function get_event_date( $acf_date ) {
        if (!$acf_date) return;
        $translation_display_format = array(
            'fr' => 'l d M. Y G\hi'
        );
        $display_format = $translation_display_format['fr'];
        return date_i18n( $display_format, strtotime($acf_date) );
    }
}

if (!function_exists('the_event_date')){
    function the_event_date( $acf_date ) {
        if (!$acf_date) return;
        printf( get_event_date($acf_date) );
    }
}