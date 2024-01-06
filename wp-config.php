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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'harshalaaprotfolio_db' );

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
define( 'AUTH_KEY',         '>we+Z@udcsblEppFpf,!jaD|(9Lc:A;!E@2.L=eb0}uE87u]>dRfoDMO7C7? :C[' );
define( 'SECURE_AUTH_KEY',  '/mEWKs-1G}vhI_iGp]%&)1#$sa54>H-vPMcnL-~<&zw*eOM[Sb9Nd{iz,U)HATMd' );
define( 'LOGGED_IN_KEY',    '*o_a,O::jgCc+V<TaZ~5r*r,78j~_$&gOD27&UH^i3{Zw`AEGq5m3dckR}xT&`dX' );
define( 'NONCE_KEY',        'e*K-9!a1q~8$Dz3`JEAAmyfXXKyjH!xk-25iln)hQ6MAzt<8f.6s6qWt_zwjULwf' );
define( 'AUTH_SALT',        '3GX<qD%e~.6#SudP#)QQGz1H(WdL:gzH__@{%;dVR@xte8vLeFPE(1NdS)2e,$:o' );
define( 'SECURE_AUTH_SALT', '*A;X3/QM#j[stYp$NDW:A&}AXk;A+R^j{Zlx!gQd$Rt2][$qxFA+C<qnXMv<*`2q' );
define( 'LOGGED_IN_SALT',   'cH/yNEeW>W%u!V6O:>$N0F<UPm#&C3c+IV{uW6;^Qho4^-,6MzQNR&(Td>I}@vwe' );
define( 'NONCE_SALT',       'F#D2bQWrTHAis]UiJ8~c B 7kY[K-m(xT1E+D+LYhh4rG~UBfp~t,S^&g]7HM,`z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
