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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hotel' );

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
define( 'AUTH_KEY',         '4O*&#8ehRMm{_=X`LM9rL> +j;g[T%^[m.u)O9*?2`W>7@H_PW;=SU<hEXUQ;5$Z' );
define( 'SECURE_AUTH_KEY',  ',UF:[a|EE;KCUe!(Du4g-V(5L~0=#T:&ojy:FV.seK>;/t};pOL;nP%0T_q5|_G?' );
define( 'LOGGED_IN_KEY',    ':-k4B#XXZCz[C)*Y_(pz8E%m_`;xkYB=[4[g#2|WlXM%Xql_Pi%~z*)TT}r>Ox>O' );
define( 'NONCE_KEY',        'm!{16em4bvagGi/@DhB#D!BGU2niKM58fY-@@yVexCB=~|AnuAhaAmGgJM})!]g`' );
define( 'AUTH_SALT',        '[*h{-O AXCJUyN:7:8Xw|R:+T:i[inG)iva+i8{SZ9:/->a5M/0zkf[gT*7+isC?' );
define( 'SECURE_AUTH_SALT', 'leu,_T,:8GG:AU4?8|!`,ZSeD6`Pkg!Vw{]C_d%L/2iB<h$N+P>dTTdsV!fTC6#A' );
define( 'LOGGED_IN_SALT',   'x47pK7n/4IH-1bUzc5C]EHPmUUe9kl&*Tawrh#<$O!CGSB%E:HN44l7i=W`BG9bq' );
define( 'NONCE_SALT',       'Lc58%enc`F}_.u+r,8FBilrGVyDEn] %8vlFuvh$u)^yzP,s,Z`M[ T.zev?Od#L' );

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
