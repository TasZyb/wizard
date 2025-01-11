<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'breadcrumb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'CNfyChS!rfezTN2D[|sWpjqw.86FI@AK9~y9~aSBsK]rm3a^-A52gIWtSb?1|B3m' );
define( 'SECURE_AUTH_KEY',  '5TA]bb%?1JkI&OHpjtSF-Z/6YF9^jw(6N0-.gIDaluM.%F2f*4qMhwD>eJ$L_pbe' );
define( 'LOGGED_IN_KEY',    'Fz;Y/IqsB@pE-BItR^7):U4M`)?kV0t8Zi!N:zY|X;W!ZVMH.`GyrUYX5x0p:J#M' );
define( 'NONCE_KEY',        'moRL2P!PqdUvpRJN].iB*dbScdGWAn1Iv8wAo)tmVgF-ji_`d]#l;Q[WX<a>OTF;' );
define( 'AUTH_SALT',        ';-RFkHEzq~@z1;&RJ#$td^Ali% E_x1iq$a/M7JK#lj*r5_#?j%Gjg#T9#6lb-ad' );
define( 'SECURE_AUTH_SALT', '2QSL<.937B`)B6|)~.|DC#_j4{zrPlG6>~6A:7EAP0u+0dyU-Y~Art.2LwJzxe+ ' );
define( 'LOGGED_IN_SALT',   '6Z~5&br90CfdtI%_Q_Xf>wtRngE3MZwdsthYlg!7dlm@ZlQgaIAOHh=jnomY.Igx' );
define( 'NONCE_SALT',       'mW9hC]A/hKGRO=kE%C.k=K?7Q$]O 3,taS6&fm&^CAlC{rmg7/V6k)0>kjV%mcFB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
