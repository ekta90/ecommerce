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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'H ,!su_H~ol&5BcEWn>C`doL<P*eVk@aEq_E./u4+c^Qy4Cc}[Dr=2vyK^NzwQ^I' );
define( 'SECURE_AUTH_KEY',  'Y(/*O?JOzl0#_^fda|`+Hk6m&ERE.ecUS{7_+lK~]SSgC+R.hZ@kJZ7XG<Fr/o4@' );
define( 'LOGGED_IN_KEY',    '3,o![3JsdW24U5RfMG:`YkPtFNQJJ1@9sDrTl:1]v*{axgJO.{cF!eV:|ZZQ;gw]' );
define( 'NONCE_KEY',        '.*=YVZqeRwC)2sr}A]YW<I{C%oFu h+0I/AQseOBTf,*@rFhe(a);zI,uXm8Seux' );
define( 'AUTH_SALT',        '=FC_E9My%&cr[;,U<m/Mna|^J/?z5h K:_9`H I?<3hL2a*8$y]mqQKlL?D{;bh+' );
define( 'SECURE_AUTH_SALT', 'LA^j#+oJ/S5$F*bQjxG)~6iR,YPNM1;tZ;bCB B0YQ`yFB#aiP67(shLWQ]$qUZ`' );
define( 'LOGGED_IN_SALT',   '8|.]d;W+9{.Ijp(Prp=;cX-FQ54xtqUumIF7QE?vx.%Yc=w:Z}at=`{k 1W_5h|b' );
define( 'NONCE_SALT',       '9BPa8c6+saABn??rk=l^9`0lq$)+mm#D/kDiLlIJp?a|K`R>fDjW}v[>Q~>ixEm^' );

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
