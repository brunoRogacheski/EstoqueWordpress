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
define('DB_NAME', 'wp_estoque');

/** MySQL database username */
define('DB_USER', 'wp_estoque');

/** MySQL database password */
define('DB_PASSWORD', 'wp_estoque');

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
define('AUTH_KEY',         'mQQms=KE(AEM2c@1ZHC*6@?ik1]}c{3$W{}UUt<>e+l9P}phaY2t`F=)JNf0{!*)');
define('SECURE_AUTH_KEY',  'k{=@&Fbd*<(:hYk(06C#9nCJ{]?.+5xxX#dihdTQY[3<R#d74gWs`H6:>hQU`g!S');
define('LOGGED_IN_KEY',    'vU;j+eXn-tkFWMyvk8t6UlE5SL,z5n,`uLnx@g&.jr_0/2:EgOB56rF|l5tP:LY8');
define('NONCE_KEY',        'IR 3kp2v}5Vq@#hPr+js[NQN]5N?O*&xbdm[}L{ry)c]FC,>k,/Wum4~(TXs.<.u');
define('AUTH_SALT',        'MV-MZ0TDeODo%(8@^=6hb_}zwhR].PRNPnWmdyN*v!c8.rc;bD[V,i2jZA,Jfmi|');
define('SECURE_AUTH_SALT', '8.@E ;yo^zoNZ!i!Fp+P3V6%&p^v),/.u.a}*q1NDn^=*EdY{Ufk]u-h]96e~9t4');
define('LOGGED_IN_SALT',   'd?m/@V{P](2?qJ?I`_ZkXWs3mJ +=q!Q30`d:D_OYCaRAoEk)I0Awz8*8%;Z;OTG');
define('NONCE_SALT',       'J[A:#l,D*Wh-n]|W+*D[Ylx,p`^h(=|4?=,r|h6,SI<o?-pl^-t$iEVO);![U|)X');

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
