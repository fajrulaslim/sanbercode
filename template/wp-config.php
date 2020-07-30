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
define( 'DB_NAME', 'wp_template' );

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
define( 'AUTH_KEY',         'g1<^vIk Ccr#KGDmeoIVecm;gQb;EQnhvz[!Z&U)N/3v+3[_.<8NRcIrNI]x4?Q%' );
define( 'SECURE_AUTH_KEY',  'VKeA@n4sWF]H&4^Waq Yr5O VO^<F,}o7IIp:U9- /rJhu_$*eG2X-xdzd(lW{,z' );
define( 'LOGGED_IN_KEY',    'a{uTXM[|uzHl%EQgbP @DC+7UHgE0@G45^TWoLMR2jM)b4?Z]+lyo>UNKS|_xR(.' );
define( 'NONCE_KEY',        'fg^lg-O*sygt;{]p3e8d=^-K17l3H=eQq>`,q+Qe5d_cOT!SeWb*9D!/=zo{vx93' );
define( 'AUTH_SALT',        '.=ZD*9N4r0ac>Q/pE2er3tl0*KhJJH+p[Yma%Jmb)&oOT#Z<m/C,^h,YYQAcU~jR' );
define( 'SECURE_AUTH_SALT', ':,}}I-=qf&?_D4ZP2V2S4Se7YDlgVKs&mMaSpo*D>]$C;~}Y72tQXb4mkuxRBToq' );
define( 'LOGGED_IN_SALT',   'zRAmDoe,ya%ljWtL`Gz#dE7:^SL -)c6C+I@F5SY.:Px%M;C$f;>P=P:SziT1KBH' );
define( 'NONCE_SALT',       'b!Y]Lti>Uo7q6}DKvRKQ]G>(gCxmai:Z3G8tH03T#{<1:]z7E`D/.o()ElU;Hn-~' );

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
