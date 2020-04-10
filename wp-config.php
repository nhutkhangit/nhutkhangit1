<?php
define('WP_HOME', 'http://localhost/nhutkhang/webbandienthoai');
define('WP_SITEURL', 'http://localhost/nhutkhang/webbandienthoai');
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
define('DB_NAME', 'nhutkhangitweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nhutkhangitxyz');

/** MySQL hostname */
define('DB_HOST', 'nhutkhangitxyz.c1luaigmpfqw.ap-southeast-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'K}w1+|69JHpc@>h620oiLmDlH{s(!<ofJp~F26$/Ae1!AwwQxQ_DJh=sI[a cJO`');
define('SECURE_AUTH_KEY',  'Y]r5OA}C4WCt1viAU#&=Xe|flGh}(o>`2XC-GYT+T/M2:Qb}ouX2Kl0`0SX;_6&s');
define('LOGGED_IN_KEY',    'Fyg3qOmSj?Ss3Y6N>]mB|G&U%c<T.@$3EHc=4KpO_!w?/3rnQJ1u/`^=^f{)Ke:+');
define('NONCE_KEY',        '0sB](DHH+M<c9[L,`Zv9*CvilV{p2kaW.&tV-3l|oj3$zUT[M:sGpkPYXZZfO6Af');
define('AUTH_SALT',        'o3[bH3%EaySrC$?iYl04&ZpJRun87Vl<^xq9|dYh][]=mN=#OT49ScZ%B}8/Jps@');
define('SECURE_AUTH_SALT', 'HF!acECL <Z|yi6O?<10|N95v~mqJaQfhLRBjlN!jq|e(V.~JP%MZF]o?OT$2 ,2');
define('LOGGED_IN_SALT',   '+ycb/iJohPO]}iw=rK@6 `a|k[ER.=[m^GxC={W.^$M4S h{Aqw#9N`H%.jQ/~*/');
define('NONCE_SALT',       'ED4|@i~?v=s,5hWN;xd1Eu6C`ZaH=mjW#lws<R`w(gBr!&f9)@;D!Oy+b31sqrR%');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
