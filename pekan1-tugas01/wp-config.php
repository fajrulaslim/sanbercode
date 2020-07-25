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
define( 'DB_NAME', 'wp_sanbercode' );

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
define( 'AUTH_KEY',         '|,&pcqNu>}HH3&M=dFc!pF B/K)MK?:,Srmg/6PqKOyGMikU-nNQO(=W~h?K8e _' );
define( 'SECURE_AUTH_KEY',  'Ha41~[6j(7FCr:~r<:)t<^eZ UNxE>pe23nH_UbA1e{_Z3a3Gay8H-|y1jRyrqzH' );
define( 'LOGGED_IN_KEY',    'au$},]h,aT}iB<@tR8[v|zdgdEbm&l]mC!#fNO#dJwD#iP|.6_-{q8)cLM_Kx}L%' );
define( 'NONCE_KEY',        'ga)j8y3e,Sd]1#eB>i`,dlFw/*~V+lS0Wz*o7muhGYbn1-+-o}NyPgYx@aEp2lo&' );
define( 'AUTH_SALT',        'Sr_PT^[$crr&4Y]=KJf8G.K~pAN,D>jJ.y5-C/&M}IJE:_mBK3Y6rTq/UGE~#>Mo' );
define( 'SECURE_AUTH_SALT', 'SsH?cRx_qmz9_<Jut;1DjX[8[:oa4~R*_2L3av0bbJd2X$bmUG]uYA!R:6]^)i8l' );
define( 'LOGGED_IN_SALT',   'E|6<0d2$.9PZ-q/3)W@4cX0Sk~RACG-aV$ FirP^8;fkRw5.1=$0<{^{XCSM`0%k' );
define( 'NONCE_SALT',       '9x}v!v9kX3/r0Nf`/>a89[%sB(#Pq% lXn`5VPcv7$kn.^g0eBZ5.QH<+a*lKn;:' );

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
