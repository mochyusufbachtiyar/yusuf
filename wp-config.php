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
define( 'DB_NAME', 'bachtiyar' );

/** Database username */
define( 'DB_USER', 'Yusuf' );

/** Database password */
define( 'DB_PASSWORD', '18650064myb' );

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
define( 'AUTH_KEY',         ',153+JC=b|sQWs}2t5l`L@<-!F.o6AB=TQUSZ~E(c(TVL)aY]-oS6p*9gvKo]/H+' );
define( 'SECURE_AUTH_KEY',  'PdZr5~xr3!27{o<j*py.Z@>kM!cA&^OGH31w):&$L7^ltT-R/H- a%.V{YR5p_{J' );
define( 'LOGGED_IN_KEY',    '5>>g*PH}8`( ~9G>y+,|,o.*]za,Lb3dPQ*)d2ckkML.&}:{Jfjbg,0#C$5PR~aQ' );
define( 'NONCE_KEY',        'VA*n3quW$gA&sc<M2k^qg|-7}/jgU-iX1cDim-SDLTmQ=(o[*O o|K9=gofr;V$3' );
define( 'AUTH_SALT',        '|Ib]iW>5l0%r*B?!>Z;uG1,jT J.yC7jdtKMRZ~C*sH=zO%!x7:POvw@>okMzVCE' );
define( 'SECURE_AUTH_SALT', '|C@IHdyP7OY;B1Vqf!{5`f@7Kz;KZ/Q;M  7hpO Llz|,RH~-Vp~J @)$IU;vPkV' );
define( 'LOGGED_IN_SALT',   'Ntd/YS060n(798xuF]kw!}x^n2l~T2u;6|rqpHDvN[.Nxk#N#N~QV|uL@T}}}F(}' );
define( 'NONCE_SALT',       'f#;:ug.^m=~uqnurdR$_@H_JGdEbX2|[,uV>9P36z]C`Am;2%3+2;a(7h*qewO;b' );

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
