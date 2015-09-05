<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'markob83_markrobrien_info');

/** MySQL database username */
define('DB_USER', 'markob83_marinfo');

/** MySQL database password */
define('DB_PASSWORD', 'E3#gateway');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5p#H=A7Q5?|O{:F*JmOnvA}*&E,$EB;lrm]f&@LYPL|qdzaRR~b~=yCR!LKkXA,I');
define('SECURE_AUTH_KEY',  'R]RrFm`D-s{0)6?uF+*m%Kblc/`m<QY|C|=NY*_v|F>iC}.K!Uzlag8y*^qo9)|G');
define('LOGGED_IN_KEY',    'Kr|1pA`]hxvD_S1E?u>:y~%.(7By{Epb/VK&A,@{Y79n8Z<+|i|~jcWK1nJs,w|`');
define('NONCE_KEY',        'OA/U]kj/9)`{Caz;EZS|c6h>Rrioh69]<1[B}fAn-~,Bcx(&o;(]-7a8<Fk-n*0a');
define('AUTH_SALT',        ')FR{}y|{-p3Whmy7=>=9*w]7AAO:-ce+0~WLO3<67fnIXV]L;OS+t9+_8P^o^^^&');
define('SECURE_AUTH_SALT', 'p1z%ehu)/|dUH~%O-w#=CnPunqBv-uT@(QavMST39p&_3hmiYC=+W5P#;.).h=J#');
define('LOGGED_IN_SALT',   '+V-|&8y(GR:86^+10x- Y{]`_U_+c)HbTk;pX 2W!V35kM$yBr-RDT?9m3SQ?K+/');
define('NONCE_SALT',       'W>qei97}x)09-}wrv$U#6oiz,NQ4-C6zY|b[ QVkP{~a=w23$iRA;Ncf?NG}t|ar');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



