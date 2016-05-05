<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eksperieDBilozf');

/** MySQL database username */
define('DB_USER', 'eksperieDBilozf');

/** MySQL database password */
define('DB_PASSWORD', 'vjpsx28M5');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '+2*];+_S9HL;9lSeeKS_]xksY|0z@>rCJ08B,0cJRUcJv!nZkN~|s-@gsC|10@|VC');
define('SECURE_AUTH_KEY',  '!dKOVCowdloRZ[1-}3^>UBJMU7nvYjjrY,y^^nuEM|}v!N4BBJ07gNU!nvv^jrB');
define('LOGGED_IN_KEY',    ']9#WeLSWDt+iptah2+#8!:ZGNR8Gw@kkvZ[4@!>vFN4C1-|S9GKS8lwddoR!:w-!o');
define('NONCE_KEY',        '4>YgJNU8Fr@gonUc>0@,,}zFN07{2+.P6EEL;AmuXaiLT*]u++iq6D#2.qyEM7AI');
define('AUTH_SALT',        'X2.yfqB<{7.TbEIP3AmybjmPX.y*pWd]1-##:-GO1DCK:dlOWZhKS_lsipSa]t+~');
define('SECURE_AUTH_SALT', 'G0kwdgNZ[w>3^QYFI7nUfjQ^{uy.qA<3,r@N47F}cnUYFM$jvyf7,6H;eLTXDP*');
define('LOGGED_IN_SALT',   'lWhO-#pt~h19#:.qxH]66.]aiPPaDt+iptWi;+#4![ZhONZCs-hosVg0z||szJ08[');
define('NONCE_SALT',       'uQBE{frXfM$<u$j3E{,rBN37,YjQUBM$nrYj3^xep9#;+#WHL2Dta]xmyi2*.;*P6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
