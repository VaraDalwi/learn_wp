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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learn_wp' );

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
define( 'AUTH_KEY',         ';VH+I2du{nW#%lJ_K]~SXgfkKv[8Id*CST<LKq%D/4{ {b2XQtnf`;^O7isac<SB' );
define( 'SECURE_AUTH_KEY',  '396f)#kh~}o8 nA>-0~l +f${#8MZH{77VjDz(yiChVm~xGMdhI3xkFP31pP{nO!' );
define( 'LOGGED_IN_KEY',    'W}9LZJm{F-C>/f;MGxHpbpw}6~HT$d{pL4lmPR5Ray3Y:m?n`;Fz<|_Ey`d;z:#H' );
define( 'NONCE_KEY',        'G;vU?A&I|+%VH62P#aZ6#Ibt h>;r}>eakPX>G@irp4:o!y*] A2-Z&(C!z?O&ky' );
define( 'AUTH_SALT',        '1FhX=_rwhsS]ie0^S:+K]so>+^/|Y)pXI;1|(^nv&OiSdD!=RIM;daAnd( 1O4.R' );
define( 'SECURE_AUTH_SALT', 'UHXV,>LA*}``*gu D8.$=UzL<l]4:Z<TJ_n Bbz_!wPz!QoAveEWi(`oFC&h!t{,' );
define( 'LOGGED_IN_SALT',   '>+0]v,x!4%^9K@nCS=Y4|7M=?q)[~xQ3Kq,*IP9!z@p>WC_:DH_~E8lczt (7cyH' );
define( 'NONCE_SALT',       '8ch`iRFsx-9di2e? ObI5v&ncN(7L1fi)~L;Fd!63Ygil8^X:~VYXmAxHM?>dJGt' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
