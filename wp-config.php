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
define( 'DB_NAME', 'wp_db_midterm' );

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
define( 'AUTH_KEY',         'q3P,k}3e@v[|@O5?reT`Ahp8aIX&sc{Qd;ZPSR#od4TB1]t2ycP292$22: ~KrU]' );
define( 'SECURE_AUTH_KEY',  '7v.RwkFMG:*{BVj<oXTKeZ.V1sH@a#aGlX#EwW2-+I|QdcR$Sl<)!kPvYi^q_.cZ' );
define( 'LOGGED_IN_KEY',    '[_/f^}K7*4x;FcSYbmc0e!Qa= =,U$;|nGkWu?)3,TsG[b61)+Tg1IEZ<KysU$5*' );
define( 'NONCE_KEY',        '1>{Inqr*t@Ra2hbZS,w/ l_M8A^zf4U]5:6hj:wC&udaUs8KG<^n-J5m23uppXhp' );
define( 'AUTH_SALT',        'tG<5D0QFBJuSnm%^jwoLOGnnr~b~+AkoqD}F)x}g;Hch)vKf9#U9seM: D,D0%DE' );
define( 'SECURE_AUTH_SALT', '^#&Du|=T!OJE?Zu6i6Z=*6sS( kMY.n$D?*+-{)QM&5igY]RgNBBogaiiX7`D.Bu' );
define( 'LOGGED_IN_SALT',   's#EmxY##)ZCZ(GR=Z}}w_M6p#fUd)Ea0Xkgb~]UA$jtVL/;Bu,-=byP3e^g&^`_)' );
define( 'NONCE_SALT',       '>:K9[!rB-yXWV@2LcJSZY(w_<H)B2+5g:bxyH1h>*Hu*dkd9=EQ!=B<FoIwvI{bo' );

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
