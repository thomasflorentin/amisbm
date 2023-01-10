<?php
/*
Plugin Name: Plugin des Amis de Bourron Marlotte
Author: Thomas Florentin
Version: 1.0
*/

define('ABM_DIR', WP_PLUGIN_DIR.'/abm_plugin');
define('ABM_PATH', '/'.str_replace(ABSPATH, '', ABM_DIR));
define('ABM_URL', WP_PLUGIN_URL.'/abm_plugin');



// ACF

require_once(ABM_DIR.'/acf.php');


// REQUIRE CUSTOM POST TYPES 
// Publications & Sujet du Mois

//require_once(ABM_DIR.'/cpt/cpt-event.php');
require_once(ABM_DIR.'/cpt/cpt-publications.php');
require_once(ABM_DIR.'/cpt/cpt-sujetDuMois.php');
