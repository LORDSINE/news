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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         '_?fqugZOnR7_O.BcF5K4%X8)WFz@H8T=)m0>$$sWbZF8CTy-?T-D!GVGW!Uc0`kt' );
define( 'SECURE_AUTH_KEY',  '=X(!~$P_`sLSAe 2w/^T]b!^%>wR@e?hm|[a<XNPDC<b8`m^QCIjBQ$ZPwzek4)m' );
define( 'LOGGED_IN_KEY',    '6%418k:01j:FW(?Y2W,umj{[ZX<]9%%:>on37#PD8%C$Nk4+PU~Vz%Aom3o$1<X!' );
define( 'NONCE_KEY',        '-|v!16S6qj9d1EOS%Tcj3v[xQp)-9Dm}.f[P(pY.<:WMv1$9M@PgVyE^p;qMYY^/' );
define( 'AUTH_SALT',        '_>s/z1a(8eL:mJ<#^:yXtcb415-DVrn-W<E_$Lym%HIQ}*7sC9Sjc&617$!wFqg{' );
define( 'SECURE_AUTH_SALT', 'l-=ry0)S^`4:o7L/EyxT,U%7zmR;9~:Ha6]FPZO./C.?7OPq}DuAr3*C%FB?n4IR' );
define( 'LOGGED_IN_SALT',   'nALh(s#H>+n 9Jx!rn3W1ddbI}3@?!?tR5r>weEA^3La *.EaGa-*#x08q>c6Cgu' );
define( 'NONCE_SALT',       '|~J=,{VVH:x8}Xes9|h,Y*lK`K~u;{{<hw@-[};M ^2niNV~s8E5nVFwPb)V6:Vc' );

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

