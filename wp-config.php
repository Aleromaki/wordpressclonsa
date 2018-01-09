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
define('DB_NAME', 'clonsa');

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
define('AUTH_KEY',         'S}fR9V>FAs(dBe9i#!~&d(Z`.9n^;(;&!e)U+O`xNnJdQv8J@#qCr?R8S*I+n :$');
define('SECURE_AUTH_KEY',  '6C@^(,Anmax)TR^,.I.O&M=TA}T6I~1s.5[NdS*_{)X)*}FgR(5b;]|;?6OL{ra#');
define('LOGGED_IN_KEY',    '([6:jl2+NF7MkPmDhgfUh}ud);;k`=VM900x_= 5o$4x^ORtYj,J#^+akkA$u,M>');
define('NONCE_KEY',        'NcOswRM^f~7 ]{.qREW f`,Yl)FS]CfuEVo|r+ii@-73#W{KgaYf?=9`(B7WR]$:');
define('AUTH_SALT',        '#F{lURlYExw&bnvHpSyl OJ*J%hel[{ovjt0+d)91~uS#=(z@%lk45_%z=X;XF1&');
define('SECURE_AUTH_SALT', '#;;W1((z[2;@yQV7xu|fdz:K[p8ct_k;<s_)g$N$0$X%blBXn59U9uQB-[K|KPW|');
define('LOGGED_IN_SALT',   '6b^i?E:HSY9k-dua)7Ab3rCs70Qmrqd=!A`n+mB;p*s&Be~^s?_3Y4!!K{ReOx}.');
define('NONCE_SALT',       '{gkO<K[V<wXbq9]NU*PddAl~{yD<1Tv?IJB?pjFJO3:iwvqyarO q#>Q59unsrU)');

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
define('FS_METHOD',"direct");
define('WP_MEMORY_LIMIT', '64MB');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
