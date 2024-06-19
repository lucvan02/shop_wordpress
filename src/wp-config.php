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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         't c!Z,)@V~qX5q{MJ.GG[1c*Jc1v>(K.-kwOto%A,=%*j[UdCWomSS[A5,RT1=T,' );
define( 'SECURE_AUTH_KEY',  'FaQiAx_l2XB04c5wh40WEgKXy:nX;k^9sPk)L`H^U7]aM9[k}/RS:<{dcT}A`>?0' );
define( 'LOGGED_IN_KEY',    'f}YKC;<Cbap~^9XDph3~:??1ck3[T6f1hzRgy48A=LH6M5.w0M?:,.zP}jZ@DrG4' );
define( 'NONCE_KEY',        'p2KfT,I1^xb%K$kON(O6Ac#;.ANDC^X++}0(aAEq+%Uc=9]@kZ(mTWYnGyxQC=gR' );
define( 'AUTH_SALT',        'crrdHfn!(!XyBsE_dF`uun~HF.K@5=4*j;jZ51F))B5(k&g2Ik= ycK33x&F@4r8' );
define( 'SECURE_AUTH_SALT', 'T%n6CC}z%$s^@3+9xPlwy&!E2Sy8|lVre(T_|_f,3xN:F:J3nS9Yism#Exga]>:v' );
define( 'LOGGED_IN_SALT',   'RrZj^L}+BPj0qmHdCtQ^?)Rz-P3xx~N]6@}1tE<4gu?x0JCXyuGs|}s,Lup<f//p' );
define( 'NONCE_SALT',       'vBPT(.8/gd~Yi|B{{CaTq(vg]Fo7b25E9;sqa[8lEYa]T(V`]q z9F+6//&gzA:#' );

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
