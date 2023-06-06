<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba_cactus_pele' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g/w8mNf(`bs~`Kazperf5gn #,!UN<u1%h&]e&[6O(U20PrO|3:O-Oh*yO3+2:R+');
define('SECURE_AUTH_KEY',  'k2gycd?=djq]?@|JoFm#-PTI-+0KK8gI!|%AUoO5lU;|F+,.[~Qm9L,lBGLJt59r');
define('LOGGED_IN_KEY',    '`[$5SS:jYt7 uCaB*ey&F5@kma5]W4w4|Q5[x%>d9*7~cJPX]:T#D@_W}dE^^]<A');
define('NONCE_KEY',        '}/O[M%GnK*YB(GFWQ.2Gt+_+]stH32Bw}V|sT<Ikp>*8~x9BGcY<RFN-3%!|QadU');
define('AUTH_SALT',        'p]~g-$YyKBey>Wtvm|qq{qT_p|mtfU%jpljW+]fMXMM,E-&qp!GU6b+(}DjqVas<');
define('SECURE_AUTH_SALT', '*-Gx+b>D[1jG!`X+<s&847A<%.>Pu=LR67(=n,(aSA4@k7az2dTbU$:HchSc}K=m');
define('LOGGED_IN_SALT',   ')(!C5s;]o=&oqIdz2~{M5AT&OwD{xyA((|dbv7j!i{~_n/?}#Q$moRS:,_tww?B_');
define('NONCE_SALT',       'O.Yi%.n%Auf@R0#H)f2Nwau_v%-{IOi{yzK,zp`|_~YeC`3oRV?%viksY!jMlOSE');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
