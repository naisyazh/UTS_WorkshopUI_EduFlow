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
define( 'DB_NAME', 'edulearn_blog' );

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
define( 'AUTH_KEY',         '?bFfu&A*%H![6{DVeF.sTK$207fOsMyU`p+h,f<3k47aI@<EALG8L#|O`!r?{!+<' );
define( 'SECURE_AUTH_KEY',  'RNx<D22IUG![g)OW=SWch4W#~2qo{4!^fB6Ig!U!hE&-*%_boP;*nx|&wZ _b<jx' );
define( 'LOGGED_IN_KEY',    'PX72LqOVPx`nh`V2Oe5w+ O$tLNGh|jB5NFGMk1YblicAZ:n-[oPF3qnBs[`~bEQ' );
define( 'NONCE_KEY',        ':4AUr)D3M&zHTuH}]L6X)[;>b%tT*AF|Wh6p+&%RQgcch{9*KG6V*t36O9<oF@:>' );
define( 'AUTH_SALT',        'RLED~|X~Ybz1W=kD|Yvm<88prO><@qdrOI! &xoZ)E!~e]A0Yv/%xdRyY]d.sw.y' );
define( 'SECURE_AUTH_SALT', '@%mg[%Mf`Uqx*NJ_=@+7|kd)R_mS:-T^/=|@xM3yfiq@n;V&p)hwn|2K6jog!yYe' );
define( 'LOGGED_IN_SALT',   'w}ufz*Wr`It:MPZ=;EbR!p6]?[S9jhczx#c%3c*,xOQFdqxZw&|%Ouo5]J<)FAqY' );
define( 'NONCE_SALT',       'Cv?y5oQP2WvfRXATbG%iDQX6na5P-=7*BW2Uu&fPYD$7i9d)Su_`y8;`N4el(z$4' );

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
