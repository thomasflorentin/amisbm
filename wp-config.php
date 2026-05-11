<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'amisbm' );
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );
/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );
/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Yk,*28`CO>hzme::PxD*?+{XjLj})_4m^m{;YN#.:J]$N9&n.?,RDtM=;-acI|?*' );
define( 'SECURE_AUTH_KEY',  '@f1L/+6].$qd,m$Oj+2>t/1+/ZY=X?CBNXoNo?J!-@dwm/2eugz~GGgv:i9;SNJM' );
define( 'LOGGED_IN_KEY',    'k)nz{5^{cgp>CsQK+4,.`G([;Z](SU@.So8y2@udMol7;8^(@_FFFb?* g<0VIll' );
define( 'NONCE_KEY',        'xZ>~@EpGtV=Y!^:D@kRz!<Pk56nuB`OLyDT5i6EtNUy2u(~<(uFhqzurunnkWWtv' );
define( 'AUTH_SALT',        '[~$bSA}Du2e=<@u~?]q_qs2_^24=-5}<_yipZD2%H)r/@I?!G=xWU|M0D&;r()pB' );
define( 'SECURE_AUTH_SALT', ' [*GA]O-95Osn8#:&U4_Qvi]2gG1.>>Rqupf.li.7-jQt1zC<d{#MP+<#}MNJi#:' );
define( 'LOGGED_IN_SALT',   'QabAWHsJGpa/[,<.Q>Z3F^;B|))4YJkvqxK58BDGQ>X-wt6D~%*N:kWl9LDTJ>Q:' );
define( 'NONCE_SALT',       'Qc%2I8sgY!i>D+hDEB|;.PMGw73|@b(pX*b+;U#|I,3239 m,3$`rp!VU8xH|pD2' );
/**#@-*/
/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'abm_';
/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */
/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');