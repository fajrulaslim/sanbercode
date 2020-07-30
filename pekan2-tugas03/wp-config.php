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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_pekan2_tugas3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iayO+gCGtxbL+de?]}g967@]Z_y&u,wmt&s?7o;._#wE8q=*45x_.)CYX+=uZLa=' );
define( 'SECURE_AUTH_KEY',  '5R  ..sz@ckfdw6h$~@jKd8flkce/|0^$REL2r{g%is;:0l,7/@3.9zRg@$zXLG`' );
define( 'LOGGED_IN_KEY',    'm-k&,~]Gk{2BQ$~n(6cVo.X+R3.$@Q,Ny1TvY]tc+];}VV&)}yQ`T%i^U}55ifpf' );
define( 'NONCE_KEY',        '%HQ_!R](s2<vhgaB#<GJ_%5 }(875S`nqj}EP3Yl(hnL`LU4 gm/f@Se^D2Y!@$>' );
define( 'AUTH_SALT',        '[8#^g`)=hP6b)TK+{ukRMI*I#H/w4mV^1P#zszS@O^!D]x*=sq%RHQ|Nr=AqJ(Ki' );
define( 'SECURE_AUTH_SALT', 'Tctw1ca%xS6tYU ]3F<@R,m.DM_dBR},]VHRgYK@axza&:}:DEiquD<XQ.!jIlL ' );
define( 'LOGGED_IN_SALT',   'qOUt[P0+G(/N%_UZvSWMYM6Y|9R067iV*yMN8[7}<s<6. V7:bj~`:8l84XBrro*' );
define( 'NONCE_SALT',       'q,_%<JqCHi$!;Hkd*qxiYdm4+ ZX1oolP,T1>(3>W%4:[wYBn N1gv7awf<p=A7J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
