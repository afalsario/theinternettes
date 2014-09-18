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
define('DB_NAME', 'zb_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+#)FJZ*([:+b8K{Q|2qFnXD!t3P|+0zMbnBU2XBd)M Rc6Am%|TvV:fWzx:nF}LS');
define('SECURE_AUTH_KEY',  'mc*/yfQ9(s-3m=^)O+wfiz`}ypJ4Lh-oTo1[.fYz68q2ZQK/4v`?m>4eUn.bp1u{');
define('LOGGED_IN_KEY',    '-pdw2XL-,q(z}/GZIw5$<$5WqVaLia{|cB3ceSx7H dktJzF>v(~8cMUO=sgqDR}');
define('NONCE_KEY',        'jQY<^Q|&pVn[>se{n IGEnz:?J72`MoBOf$xh}llX&6[^g|DB+(c+:csi-^7sMjH');
define('AUTH_SALT',        '.!DAP</;||sx! -$K-W{)YyA;xiB%-L+-kp-dB=wS9MRz2aA jo3* !-5*4nnttA');
define('SECURE_AUTH_SALT', 'X? n6%E60RL#4:sY7o9X_0Bb|c=fp]J:}Z,5~V2XEuwXR:&Q%N-5)6A)JM`|eQ9h');
define('LOGGED_IN_SALT',   '<ov}N~GxReB[qPMzi-`8S32$$Xi#t<}I.%qyP*/}TD4o;p)|a4QdDV}-!|tGe&74');
define('NONCE_SALT',       'I0c|K)Y7~g05.I|Arh,WFi$#DFQ6%$]Qo;xX,rH!@X&npY{DhhpVghJ|crK/Q8Tp');

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
