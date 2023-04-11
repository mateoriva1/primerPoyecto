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
define( 'DB_NAME', 'dbwordpress' );

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
define( 'AUTH_KEY',         'Y#w0z>x2##HQDr<VXu^3,t?uVS}o{m=kO2KHe =J|^T)f|oW5PYfCO$jMLFZ4Z<;' );
define( 'SECURE_AUTH_KEY',  'K_cJ~zPzQwBI#B:_~u31;|d{OVuwqT)i[5%L$3~-~HkL$ .zna^4@cQ8}ig_A*Vk' );
define( 'LOGGED_IN_KEY',    'c%^}Z1)@,8l{^=aiMMeb}*tD*E[#giMf(bKo[2E<7fzq#yWj[&nUKH(<&enE% ZB' );
define( 'NONCE_KEY',        'GZDyrkoe%~Zp@Ilk_pPRZABe$K(cMdi2(M&PgIy*2jZ|7D%m{%oaxB]bw;`#,^g$' );
define( 'AUTH_SALT',        '>OaL4,.3>EAFMBl`)^}fVk,_2zzaE>6 nmq>#VDPoHPu5f,$y$:2oBf3 Q=8c gY' );
define( 'SECURE_AUTH_SALT', 'S*F:wsKaRz~1=2Vnm}EFzvu}DKD@%qT=ZV8;0@(`:sVXlH6?g}[.|uH%yv.OSRb7' );
define( 'LOGGED_IN_SALT',   'Z=w85+xz5Gsq!{hX)X*3COG5|PSOVNYS;7XkcS|DONO!Tl29wI>9xK0n^;Qg<e5n' );
define( 'NONCE_SALT',       ']Za_tkaK]I(>bl,>;0uh a*b93$TKP7~(X1UN65wdE$#RHknC/WuCe6Q/cYjEFhE' );

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
