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
define( 'DB_NAME', 'wordpress_reflection' );

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
define( 'AUTH_KEY',         'Nm?iq$,x>uD]}[>R49ftnmK,<}OVU7W~Kqwh4W=W4NiX8G_i6?h%*:{W}ZeY=F$~' );
define( 'SECURE_AUTH_KEY',  'p`9V-MDK|^q,=*yvc[bi96v@#NS(2l6Z=.aZX8}9rcXz a:fWN%7}%`##aHQX&JT' );
define( 'LOGGED_IN_KEY',    '?uS^TC-iOvIOE)8h~UhYy}SP<_3B&}&*))7[:y0DhNTI3c=!e.#]06y&FkB%HHq&' );
define( 'NONCE_KEY',        '7cv7rhm*|^QU9gs0wleE>lk:I0bW4YP|!ue[(fPNWRiK+1<2`[_$zX2;Q/J-oUwL' );
define( 'AUTH_SALT',        'zuPZ$g2xrCwM4*Z{yz2qK1PWtUbEo$TfrUb21wo2L:W/F0C_a$Q0xVA3` i:(8nD' );
define( 'SECURE_AUTH_SALT', 'n&Gn{Zt)l12`|u*>`=,VHI[wnS^}@aU*Vyf^x-MQNzE|MAM42e/Srgffh?oNh{X$' );
define( 'LOGGED_IN_SALT',   'b~Yb=%~(s}fJgf>1e&i9A$IdMJ-G`al(5;)}`0QSlBrQI=`Pksep`a[oh.5-Al 8' );
define( 'NONCE_SALT',       '?.B[=?]yVTzm0a&K?r}3qfpKX;.]-OJ7wby<FdF~t5!>!m+Xy,m.VQs^z_WTV#z6' );

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
