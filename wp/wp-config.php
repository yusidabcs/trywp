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


 define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'invitaline.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('COOKIE_DOMAIN', false);

define( 'SUNRISE', 'on' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[0THI+vT K Yex,tCUnW/@)~?#S8bn}m3~m}{l$/K#ba7Z7d@2b$1E>sj|$}=1U5');
define('SECURE_AUTH_KEY',  '7.;E=Zt~D[MjcwjzC/zFp(`Yvcxe=c?qmFB0UzF=JztL~b2.$Divy6W2iv:`1om;');
define('LOGGED_IN_KEY',    '3Ki@Qdd=/^1RL!,&nK_0_gs1*v$?XdPp9U*NTi13~}]lHD697b?/bKmegU-PBC=&');
define('NONCE_KEY',        '69n~(fZ#J;cO8:](iUIFi%AOe[M2!PpBa*7L-;,^=APBjY[pZQ;7hUoj`G7u^yAF');
define('AUTH_SALT',        'Oy9;OIXQua{M-1}r*h;u;LyW2@{NCMK3!+v,jnS[17QnKj!;bp(&gJpHlt9g{zd^');
define('SECURE_AUTH_SALT', 'qE5S&g0H;Gz68)1LE>8|BT}I)yWrMNt57[`jE{mf%e=q;]4Wr:xwh+vlB9dL3G5/');
define('LOGGED_IN_SALT',   '#r1@`(M6`IQYwaTxYH@~G.D<ay?@7}*=jeONJwR71;.]Qy~LIV[vLo7GnZY HF$Z');
define('NONCE_SALT',       '&>d`fJ/[[L-Z,#]@~ETDxk&2{f[h4WE1Z8/F;5x?8GemIrW@u?GF>b#(Rn_3LyWZ');

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
