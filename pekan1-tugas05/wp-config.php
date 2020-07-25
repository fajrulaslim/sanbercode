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
define( 'DB_NAME', 'tugas_fajrulaslim' );

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
define( 'AUTH_KEY',         'yRO3*&6!t8AL)gWOOaBi3I>HFSv5!y)mgvT8Lz[]?~}0^`~UP!A/z{YkYi=6xTYR' );
define( 'SECURE_AUTH_KEY',  'G*}IYnPgY6N4~682Ex%3/3F#H?0?5onnAYP ~!ZKr]a]^jjmFxJN|),};WJ37B$=' );
define( 'LOGGED_IN_KEY',    'IV%`Xj/1+0$|a7&a>)F<yo~~@M5lH_;eOhELo+As%BHZH9/wH.eQvDNOUoO(@$c*' );
define( 'NONCE_KEY',        'IBy)7)%lL]![ ~MRO`10<k7eK.wJB6bu)7D98bmNrB5(f]xRbZ8zxr%NONUCY*$u' );
define( 'AUTH_SALT',        'G X}^oz={EAd e^%yxb^M98oRFJ%XG;z[@U-2!6u/XO+)p*_tCiIsh08Eb;c0<]7' );
define( 'SECURE_AUTH_SALT', 'A/kG3=6fQ92Cn%|IYQ!fuT{VE!cOFsc1E5eSCDk*=XOK@n-X#GxLS{184/oFeogD' );
define( 'LOGGED_IN_SALT',   ':>jp]EX<?GX!1x[t-{<)M7L:>+!e~c<5KdQ]rM1t@1WSQ_Dz-F-`paMU&W&IC!NT' );
define( 'NONCE_SALT',       '&Ln:sF f-~jl&Z_R_W,UH|V#+J9EI/be*B?wXbPT0,>S<JV!aw.BxZVLdN~3K0L1' );

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
