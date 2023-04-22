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
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'Swastik@123' );

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
define( 'AUTH_KEY',         'IE^De2MP@dMq/wl2C%miI+/j4X`@S1_^IJLI`35.:L1Yk3L{TQ.p3ocJ)CX>x6F2' );
define( 'SECURE_AUTH_KEY',  'v<l>KG[5|e6J.14/4i4aOBu@AykG]iK7#36!`h7o@X/ANf`ZIa3^MD=J1]Gk)Nbe' );
define( 'LOGGED_IN_KEY',    'PSm(Up4Pm9%@(?xd_*@ri8~>>Er[]MoyUu9$ypsxaHyz_T{+DYh&+1WWx^|iL?@P' );
define( 'NONCE_KEY',        'L.@8cC.S(<:Sym**`!d?PHem@=nKgRT,Ziq?Os?1O+-N:I7iAhoMB&mH^3{<G9+8' );
define( 'AUTH_SALT',        'B=<9m56(p>b}r-}1lYhwY`gc` aVI_d*.,DZ!WPSy*(RZ.bc+TTsLg$9X[s}=2o_' );
define( 'SECURE_AUTH_SALT', '0;,xrzn9V$I&+4f72|2&cy6Rh6582I6^yQkz=[,uShksFLa7-=B^V#>cAZ/|Bj1H' );
define( 'LOGGED_IN_SALT',   '{IGO=kOK2^&CX<rW_XTe Pn7mja$Q:Ae*Sf?vS1p%q*:}2z`w@T{cE]2x(>yb)f6' );
define( 'NONCE_SALT',       ' {n{67RnPtR#kNlB0c8ml{ZR+<4Ckmw!VsKQ+%`&&b>}hcrQ/_f|3zIoC2,S(F>K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gd_';

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
define( 'WP_DEBUG', true );

define('FS_METHOD', 'direct');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
