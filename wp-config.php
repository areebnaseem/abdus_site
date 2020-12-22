<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abdus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%~Q$su`4ZMrYGt]&B8u_5*jg:ihR03za*e3*p[DauaO8YEHHz+A6~1Kx3j)@>q%B' );
define( 'SECURE_AUTH_KEY',  ' w9?*a~K*1)_KYWX=MA)DxQwhG)8<grP3jue{5 uQF3YCPZO -j?;>3ZW?q[X?S!' );
define( 'LOGGED_IN_KEY',    '>HTAoH2Xw[l>PiY:jQA]&itRm0k^)Ikh%;5qeBbb$lw)PkH|i@AAn=~q?Q_?/d3%' );
define( 'NONCE_KEY',        'f`_;N/%12[-@B[+17g]EYmM((/QvMSh0l%?hjrW$KN*o?GsaZLq>;V6lY=z%$=f[' );
define( 'AUTH_SALT',        'GqOb$a2f=)LAXA{O5G!2cLh1G-L9/%)<87_iH81HxF7XOmX/4ktdPNvE@%=v2pXk' );
define( 'SECURE_AUTH_SALT', '<Ul7@1ENYf,+[J]vj*$VS&S1,`!Sc|a$9g=?8+-}& Jx)g)QB-s>Q[{Kx|6;KUI5' );
define( 'LOGGED_IN_SALT',   'eHt^]`)!,~Vyo%m=D7{ *NJToBXvX3T4~$2GyI{2EaOZcnY[0Zk5[K`.N@ IEY=Z' );
define( 'NONCE_SALT',       'zXZV:6Q3~6+1-JP5/]Uh]>S=;G}S&H#iu&{)#WSjT:E3V(>/ uCDO7<gVh96@@r%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
