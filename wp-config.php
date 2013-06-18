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
define('DB_NAME', 'dailybrink_wordpress2');

/** MySQL database username */
define('DB_USER', 'dailybrink'); 

/** MySQL database password */
define('DB_PASSWORD', 'pandoraboxx');

/** MySQL hostname */
define('DB_HOST', 'localhost');

// commented these out to get rid of strange chars - ryo
// /** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8');

// /** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6hcbv,.*U>W~qrznQ.9!Q^U5[l$|Y,V |(WI+eHRHt^]%h:#x(cT=6ldjNQ|d$+`');
define('SECURE_AUTH_KEY',  '3(8:rM^o,)`(+|> W:64}P(YC1Z$S+9L.9 _4/-&V!,wv(pQK5S-SYu@Bg>b4W@i');
define('LOGGED_IN_KEY',    '*PPfb#;+<[K]d%H(4MlODCap]za/yavJgCJL^6Ejeoc>du.?gm/[|wAU>V]mS6-f');
define('NONCE_KEY',        'iMdybgza5uxOP,**FKTu6%^!471DtG?Y-|/j4-RV5q[f,|<q|^$[b6$j <4AU^C|');
define('AUTH_SALT',        'h4s4Jo#li9DZm(7.-D`F8!QW;S$B5]<T#qyHpPv hY$Mb}#J$(wB{Z7un@Y4-5nh');
define('SECURE_AUTH_SALT', '&CLt2-lyjCgcv]A_+uUf04j/}I>gD{}3k!)23#289r401+j_Av5cx_p&Ci=`!ykG');
define('LOGGED_IN_SALT',   'a}bX?yw@^A+^|S2Im*Ae;;*sP@99(AVRbC(&{Zv`E1*HaKcm3aRnvqS0l[M~V^G6');
define('NONCE_SALT',       'pP3BV+4[<T]2[Pi+k7+i>g]8W+>oO2$`.qvF;wq{ibntso !>*M,a&vH<lq+F?{a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_nddbxg_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

