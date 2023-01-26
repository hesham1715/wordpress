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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'e$9|#9b_swmQ.93s6iiMu*I@{&fVhTVNbzJS=5H>zG(M_HwRz,wsFz5E<NlG;*<)' );
define( 'SECURE_AUTH_KEY',  'zM_w2!2(e_[[7p7^Oh+b#+}(H/<*q[>l6^Aa}A{z#oi>J99J^ZKSbjZxiU45#Gl ' );
define( 'LOGGED_IN_KEY',    '~}9@=oSv9^#7Oz75*XFMKuS>GP*?T?:?GR5})KzmjqLA%5o[Leb`D(}ftuggP|Z/' );
define( 'NONCE_KEY',        '5jk,$~4&-NS8}u55wud*cxD%b>(h3!@4<bN}Vx_E:SX6kCkbkchrc,:UqnSB.bC4' );
define( 'AUTH_SALT',        'Kyc^b~TV7FFvHD|%Ub2%A@2y1?D`58<3Ooa`<%C|-wo,L{X5K2!dH:9]SE3pe3#m' );
define( 'SECURE_AUTH_SALT', '~Hk_5V;.Ggs}j99_pTzwX<f9ox2;- Y j6B >87BYOR@=bc:rUT6$V/e%*~/0)#:' );
define( 'LOGGED_IN_SALT',   '/KuSYMa71fS[DX[A|3D:m8ER*|4saMuD:7Ey_YO08%G$C1YYI&KJ</a.JGaiTm8/' );
define( 'NONCE_SALT',       'dR,L}Ud5UQLL1:6D. *ArRZaw,Loika?(jqkhyO v FHqo6DSSUNnbnL335X&5Td' );

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
