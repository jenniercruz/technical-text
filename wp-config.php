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
define( 'DB_NAME', 'isningdb' );

/** Database username */
define( 'DB_USER', 'isningdb_admin' );

/** Database password */
define( 'DB_PASSWORD', '(LJQ/Qz5M4IWMU]@' );

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
define( 'AUTH_KEY',         'uuau&QA2f:vKe=`4U2rO~bjVvtK.CjNq/[J!+f20Bsl@A,BR4#rw[g4oOztD1k~J' );
define( 'SECURE_AUTH_KEY',  '#GLjWNHVMK&k;J7_;pMHT2+E1[f9uze^2cHB4Qc,ws%8pDuKeq~]4-l=bneS:{=h' );
define( 'LOGGED_IN_KEY',    'a&aN^<wN.>yuBTNm#50{N+x-=:Qlq}C.dY.U;}-vfAe}EdbYM/ciRz:jo<lC]Q-t' );
define( 'NONCE_KEY',        'qUjJ:nLTtaJ|Hq!dS7LS6+{#8VL:K#<h~/I_9CYHXey(Au~3:QqdGC]^rofNlwte' );
define( 'AUTH_SALT',        'Im/g&/9^PoA`aY^W04(.K=WFMB GJlo`|h2A,T;T<tAvD.v!qt%W.0jE>eku3ScP' );
define( 'SECURE_AUTH_SALT', '{l2c.)3,?Yq7f7oo#bSDj@-Jc[D!ce}{8!~BC^3}N$r#AJF|>TMH,6%j|Gc-^:o#' );
define( 'LOGGED_IN_SALT',   'Kb18>kVD_c7p=qQtKVY?<2/EMS>eX#6<Pv=]> E((r!ih3dP15lp-0LrFJ8MqBIn' );
define( 'NONCE_SALT',       ')7BpOc-C,;(Iy{V$lT%qH>8aV)S7D<;s?fam>t>Ms-f]K*L8el:1TbEX:-#nT#a0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'it_';

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
