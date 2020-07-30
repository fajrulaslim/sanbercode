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
define( 'DB_NAME', 'wp_pekan2_tugas1' );

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
define( 'AUTH_KEY',         '}FeVx4Oj%~Y{;TU:_A%xr B>Sg1IR3cY%D#Kbtx=Uv,K%#L([PKy`Hy1zC}mZ. %' );
define( 'SECURE_AUTH_KEY',  '|>k;YX?,KN!~1@MH^:rV=AStmy?k[iQXr4G[dHMMbeD{L54;itq=*_5=_[w;u5zc' );
define( 'LOGGED_IN_KEY',    'ciJP9L.0XBS!!lqwtO3`G9Td< RrG!,~!:qA,|De:tG~r4HSno-J%<,=XtgK<UPS' );
define( 'NONCE_KEY',        'L6m9J}trq!qsdJu5m5zxT)i5sE;2G!,4W@^jQaF_~wP(/]*<!@]kG1KCI.7l5W^i' );
define( 'AUTH_SALT',        ';sk#_u]vZjj9_pw=LtbG@-Qr%-iv@US[g+^1Wf{2?5OEIV@!$Owa,!a6g&rUG0gs' );
define( 'SECURE_AUTH_SALT', '_GGUJou?svFW0EU!42]moqgb$LKpP(lhho0r.cz66r8aHn@ek)&s|LRwIi]&<dl}' );
define( 'LOGGED_IN_SALT',   '$`vI`6w%)uYSFN*8Rf(w 3Hf51s@(-0!6 WLKqItZ`C-;w8:E}Oay=u9T]nd`.,#' );
define( 'NONCE_SALT',       'XISTeu7L(7%0sLp`A6`ChAE|,LC7lfUnI&~^]?tbH{yIB4GAAR>]-sz7#kqo.&:J' );

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
