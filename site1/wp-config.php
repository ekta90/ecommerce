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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'AS2*!JVzlnyQlAO5NwATo_XmX_@fon5k3sP>/Xk8wI903Ij*)tSU[0xZ5w+BT,.z' );
define( 'SECURE_AUTH_KEY',  '(Ui}dZ<[i&t5&8&CE:scY#`EZK?h-H[=m6v>4j|SmkDYzY}YTo`n(oC-$]6 _IPn' );
define( 'LOGGED_IN_KEY',    'C? 3Z84I5jO:A5Kb#y{bf])2jAwEIMHO HOo5qcXO5_|DmC^Qe=H_9^bWgtO/$s.' );
define( 'NONCE_KEY',        '`{;vb&(w :0gR7sxd3ZT5^&x;g)v}/6Q9K}v?F]*x+e(uKA!F>ZP6Vf&~qv4XjRJ' );
define( 'AUTH_SALT',        ';y@*l:9d_o}/b)xTD}g:iesZ)3$/c1qv;< ^E?7e$E 0SW/2fs:n-g{I&M((6N~o' );
define( 'SECURE_AUTH_SALT', 'Ue1hD+w6iSwa#TP Gt5Ybdeqm.@`v)Vqy=Wu_&4aN%VH~lzcn,@?Cu/rG{sCCjrI' );
define( 'LOGGED_IN_SALT',   '}Fh*>``.z>M_jl0kCOnXEi-<dSpt$4-;AokoN/W%<%c.[y641^,wU1aq<C^k3;)P' );
define( 'NONCE_SALT',       '/>|XV^!-+uosS3{p~Rm[{4`ox^{.3_5vI<i#I^v{jW`jC;ANcoCvUEeGfbT(Bk8=' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
