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
define( 'DB_NAME', 'world_press' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'U[CTiW(n{)6:ycXmldLLCs|^l.Y58*]/L[zw{5ftDBrpdl^n`/b<X-OVim;[u0(W' );
define( 'SECURE_AUTH_KEY',  '+}}YkWKpKPKDkF8E|6*G*_Mg(oEUj4Zk=r*{OhoMx$ }{*1ZKNjwgV92NejX6B )' );
define( 'LOGGED_IN_KEY',    '*tY0rgQ!Qn?/ZaS~74IX$;2!yl*HiY]G`nrr%6M|PpU>hrq4ukgYT~]p {3;5VyG' );
define( 'NONCE_KEY',        'Dw#M{uyjlLwW0I9 abu:?s)wIgNkux.jR}~n SlrAmbZctV-)EVi1~h(kzEv_Z@4' );
define( 'AUTH_SALT',        '!]{ou?]$V_.Mq.y51(MJ-YzzL7=#gk9+~}x!:xJ^ga+;P=}BJb80(o;!H6P0U Mq' );
define( 'SECURE_AUTH_SALT', 'udUhg.+~:&b93O~t(pY)BBz-VY#7/9<>vMm.4&t$S4z0`}cO#bFW&nL(8-S(r]F,' );
define( 'LOGGED_IN_SALT',   'T]0dKgFA`S8AB&J MV/]N2[<8NC9:,~`z<xiDEULFiw_rfdz>7 K[2o)z69jJ$:Z' );
define( 'NONCE_SALT',       'oYSi:A`4y;Zg]{yl?xXL^wV,OO*~`ceLFvO,_M0w9+0Dhtn}IK!d{;0a^ wUK@Iq' );

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
