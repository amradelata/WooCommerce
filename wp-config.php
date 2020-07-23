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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\WooCommerce\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'WooCommerce');

/** MySQL database username */
define('DB_USER', 'amr-WooCommerce');

/** MySQL database password */
define('DB_PASSWORD', '-lzij2za=3u=UstldUk9');

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
define('AUTH_KEY',         ')i<w.9-zlx<*S{<nBvy>8-OjaECi1ZrdhWES-O6j~1*OH<~!ia=$6CrQ|OJvQV:-');
define('SECURE_AUTH_KEY',  '+E$8>+K,~5SrURyqy35{{pSq*pmv=moFNv>q`w9d?U0v-ScQAvWMDPxB}4w=W}J?');
define('LOGGED_IN_KEY',    '&1gSV&~eBwiO-qk1WOm1@H9[aRqCAcOvATc6<]*A%UN| OU/{9RTS|&a3%hst_D-');
define('NONCE_KEY',        '6[J+Uo_ {jT2:GRL5HQ+ryz|7GH,-_Lm%QF7y$Dq+9|;9-tlZjE!zP;>v6XZ7?1 ');
define('AUTH_SALT',        '8rDG ILj|i}z7)qq5Y?tRsKm@?Vp&Zz@svFYg{/|a+N*5X0Aq9x+x#x@2I8Z2FHY');
define('SECURE_AUTH_SALT', '0a=YdTjLYgR9h{SVn/0BvwIwiw;uE+;GUxF~gn:;+LA~O+drQ?%*mbi.~ E4zb|J');
define('LOGGED_IN_SALT',   'g%w/>u<!<_h%/+0%zl<->$1xyyhfgr%}VVVXW`5vV^wG5~c1!WY:P)W(~}PT a3N');
define('NONCE_SALT',       '_=P!%SR-rzr+(a-#da;(h,:;+*^/Vtq J||NvDrUgElK;M4Ij*/#ec5bueH<vjtg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbbfdsds_';

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
