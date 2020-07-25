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
define( 'AUTH_KEY',         '>%R5fA|KvefacGRI3e$W6td>gAdm!7c+?G}f-<GY^,$^G.AfQIR0hvwYpAU2,@e&' );
define( 'SECURE_AUTH_KEY',  'i)9Py)}Oz4dZ}:681fX^M$SV523 XEDQoEi(=evuq|?00882wfb}_{Ifj5vFYC0!' );
define( 'LOGGED_IN_KEY',    'mlsVrzwB>N3rqD~71H|t&#-2SB@RTb&CW%Fi|FHHtx]FYt/KxPf1,kaWHdTxTEe:' );
define( 'NONCE_KEY',        'IbF,YB}wuOk$2W/mj hF#`/hnwG<KB_z}iU#(6wib3eW#;_m,0}+bq>=O?W$e6>T' );
define( 'AUTH_SALT',        '=VQ2 Ss5e+{$T2}:P-mJ)uqi&5!hKU+[ZBpuzZ.[E$@Y,pT$/0tn{tts9Bay_eu`' );
define( 'SECURE_AUTH_SALT', ',j=Nq+L%Nri20W?DH%R(^A8J9H~0N;NlK)u:EeVYkOR.pOa*W#G{Xk9$yUKI93)0' );
define( 'LOGGED_IN_SALT',   '1V&D12ZRhXMHm9>S:<Vw:BU]3Tb#F7!baVFN#OGCAs9khVr>`7CE:ct)^}*<t>tx' );
define( 'NONCE_SALT',       't?2Fw9-| $DstWj{3i [o2&/r+[UkfV2P-:u$s!u;/]1LGRy=yH[}a<XP5q[YOF}' );

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
