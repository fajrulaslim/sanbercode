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
define( 'DB_NAME', 'tugas_fajrul_aslim' );

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
define( 'AUTH_KEY',         '&(uhjn&*;2DBVPz`F13#c*a#,+lzBr+&@[fa&)4*5-G^5mcWE)yoiYVRKe*UB=#`' );
define( 'SECURE_AUTH_KEY',  '8KO]|d9-N?1ULE#wO5mdSDHSFT*?K@Mn^G @NM^C+cmPU`~8OB{qO6P.sAcOCt6L' );
define( 'LOGGED_IN_KEY',    'bV^ r)->wRYZ)g=t1SN>826Hz1#ks$ZJ?$`3j;aqE,w3wevVTsNA._J$9Adt9#q,' );
define( 'NONCE_KEY',        '(LC=G/`4xzHq!Ypay6isJ4o*=tPP!/QbwF~`H7Q:K4Ny!=2r|]rtS1mu$O[pX<5/' );
define( 'AUTH_SALT',        'M<DkdtLL>-X__G0l!Zu:-fH|*P[z&r^k@n8nOY|@dA$iN?ilLT1^~cA7tj)eY[u_' );
define( 'SECURE_AUTH_SALT', 'Pl)z|E[3cnwV U(B@/M%lcsZ<_hNBSI=$Q{7S@g5jhbo!*XdnUL6WU}[t5<>-g81' );
define( 'LOGGED_IN_SALT',   ';ROq*3*Tu_.z9H*4:-I+r=CpNTpZHY]AjWe/<e^C&;~h>433oMYP$_qPqc:0cC.i' );
define( 'NONCE_SALT',       ')m6R{4U7Yk<+cq[wqu4o}lU[HKm~=(*}yUMMMj2BdFQSi7]<0iUfZJ;R5.k-g=}-' );

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
