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
define('DB_NAME', 'faessler');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'C8uDzBTHhUZwvtvQ');

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
define('AUTH_KEY',         'SEGqp--|U`@_iGh;pWU]l#NxeN*aFPgkN{V=-}+l5+V{F3_>;4wE:_N?Z$/$ `u~');
define('SECURE_AUTH_KEY',  'jlpKp`a!TxOwo|%,%q32]twoU,{D)`b]&e+rMJ`HSRg!/>VYL`4j$~OQwe+c5R-l');
define('LOGGED_IN_KEY',    'f`H6- drW5q$5APo3:fV)lT{}~TmAy?v/&a-t#AxeYWQmxxpL<;e-oAO}Ti3)zQu');
define('NONCE_KEY',        'A{,/Z1Hg Ti[beEY!BTDnT)/(e}b92${ ku{|V-J>_>T+avkCUEHdl8CLI#-dH&^');
define('AUTH_SALT',        'U0+S{3;M4ZAosK%c)*P%C[d?Q_Bas-eG1JAZ9-FKO [-d3R|kT8$Gx]/WDXp|Gh#');
define('SECURE_AUTH_SALT', 'l!&eTR/tvq]i>8,gl|]2n,IOaER$*U^[K>L7|,C(,v5+;n-Tlg^PBh |s(VloU J');
define('LOGGED_IN_SALT',   'l>IiA^nE5(C%,Z>&}+$W|A]hyr9Ai@9]QZ?QA-FjpE3RSlBC0H4g(iVay[7|^Vb:');
define('NONCE_SALT',       'Bf42#@-tvrzm,}h$TXI;Ot[tLC}?qs+FFDz7(u-uwm+L>rdZkD[M|<j _i2k#`ZL');

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
