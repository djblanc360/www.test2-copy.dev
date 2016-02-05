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
define('DB_NAME', 'test2copDBtkzq6');

/** MySQL database username */
define('DB_USER', 'test2copDBtkzq6');

/** MySQL database password */
define('DB_PASSWORD', 'FP7dxd5aGi');

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
define('AUTH_KEY',         't]xemTitLXA]2*2*{xe+.qTeLbmTA<2M3*{yS5G1|wZh-_pWdKahO5D#1H:5_]w#1');
define('SECURE_AUTH_KEY',  'C[w!o@[sZgNVLA.qy{3*mubq$jMXATfI7^{E<3$ju,ryfnUjvbEQ3MUBIy^5_]');
define('LOGGED_IN_KEY',    '5G:-_YBM3$>7F}z^n^>vYjMgnUcJ07R4B>v@08|rzgv!JckR4F>0<q+iLTmubEP2A');
define('NONCE_KEY',        'H;LT6H;x_2*]tai+.qXeHbmP6E]2L;A.q+{y*mTbu$jMXAwdKZhOVC|1G:5~[w#1-');
define('AUTH_SALT',        '$<u,yfnUnuYjM3EUBI{7,3F>v$jr,nzfJUH;9_]x]2et+iPW9TaHP2*#AH;x.m*');
define('SECURE_AUTH_SALT', 'G18S8G:w_5~#s-h-_pSdK$,ryfMUnQcF}3NUB,0$}7gz!kQcFNgJU8,}FN0@>rz}v');
define('LOGGED_IN_SALT',   'D;H]6_mx#t*iPWNVC|0z}8!ovck@gsVCNdkR8G:CN1@1~hoVowZlO4CVdK:5_YfIU');
define('NONCE_SALT',       '6QbE{6*VhKS8_:G[5~ls#t-hpWlxaGO5DW9K1-_5D]xlxaHOepS9H]5ZCK18!5G[1');

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
