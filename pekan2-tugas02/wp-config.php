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
define( 'DB_NAME', 'wp_pekan2_tugas2' );

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
define( 'AUTH_KEY',         'o#//q)2.R)O*s5.OA}$KV+YfaHe:FUx<sK} #cH3Pqn*m1jp&IX}A}#gxA+$E4CO' );
define( 'SECURE_AUTH_KEY',  'EVBs|}svy8E;}R@_,uj:; e$Vu 6C0(i^s&*xw95+;Wq&T4 w,otQWrP1<=F*nF$' );
define( 'LOGGED_IN_KEY',    '@Ppna^.P^`G3K=!RZrS tb/D]V#y34.7H|]J?nf}^8b!Q{-&I1ffELPn[[0.sb5:' );
define( 'NONCE_KEY',        'o{<@ >^Kv[H]VkV>*G$f9c,*#^@J{PND &/K]~O+O8m<HK@@cPl9=~Uy|3`pUPOR' );
define( 'AUTH_SALT',        'VDoLh&>X$V6 -A]kg6Wb2tAX,qb4dR77Io*pAP>>lGA/>1rLjl%M[55.+nkY&SbB' );
define( 'SECURE_AUTH_SALT', 'Bl;R$U8;},wH?^.`[n]<BQ_z#4B9~u=E_<Xe{W53NczFz(/A8 s^{}c2B6:@A~X+' );
define( 'LOGGED_IN_SALT',   'ji`qmZ7?,h$@?abHYOf]pUDwpi`d}gl&qHP7fc%[{sr%>ZVRKz-Ib6TK^n@TzHS!' );
define( 'NONCE_SALT',       'LoT}|ja:#}|-a^V,G_5%kCtrPp/Kz,)4.C,YewuJCX,<xHu/C?O*B1-FLgpW< E)' );

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
