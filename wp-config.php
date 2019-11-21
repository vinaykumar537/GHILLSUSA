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
define('DB_NAME', 'bvmscdhv_ghills_live');

/** MySQL database username */
define('DB_USER', 'bvmscdhv_bvms');

/** MySQL database password */
define('DB_PASSWORD', '}pU$B@pSKF0X');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'jiX8N;f*.4@N2_0n]avq^S.{PU#uC)jx.:woIB*x04h=C5~%{`PF.q^uXVVx!?O3');
define('SECURE_AUTH_KEY',  'X@%rmL!TjCSyHy>E|IR}hCh.ZSA^TLnk^_r`$:q7gY2Eyh0pbuy|HTf2BLMS%hNR');
define('LOGGED_IN_KEY',    'tI KO3Xq3z^$8BcX|h~!MAZu@=rL>XK2&&eJMJY)1(t2QTbqv!.Ep4-&vi6sw^md');
define('NONCE_KEY',        'Cv-ky/y#R9[sjfsqN1u%AGRh;<.8E+G_@e,4>oe(!tyY1`lQ>6`8qtp%=!NHcWb^');
define('AUTH_SALT',        'Ve.)(&6E|NM:.@V/Kzf]oRkyP$Z3oG~TZIFo+~mB{8MJpD8n3_S&B5!@D!eAIy[H');
define('SECURE_AUTH_SALT', '6E)QJZzh?CV6mS/3wm}g$Oq2CZ(km;Ti-6YUxn#eZ?7?aHt2CPU%4+c/B#mxiG^t');
define('LOGGED_IN_SALT',   '?Xy}$.8rS<D&R:mmNf)4wv?ACHdU;7H%Heh&/DRwK7/5|&g`mF>W-zvX(H7)070T');
define('NONCE_SALT',       '!A-`NCj1Gb8X ?yHd1KE^`_<H+U7f>x|~(,&Cv{HFH)DfbokU<s)GJt-d`759yW%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'g_';

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
