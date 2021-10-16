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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'IhmHh>)yx-Kyqd!r7np{Hf9O~LRtKqnd*n X2wbGSV1-/)Bw[:vWLeeW*ziCbx+]' );
define( 'SECURE_AUTH_KEY',  '.+W:cGp>jmn%wpyTTO<U_^]Q.CFJKD3y<t]fo.4}7=qsX*,pimppBt|>/I[>[H}|' );
define( 'LOGGED_IN_KEY',    '0KHDdAOB+;Y/n7MLqAB[(^):N%5_ ag$oP%bmYxYo?o#%9E%YqehS&gTpa:mBcsX' );
define( 'NONCE_KEY',        'h *.ydj>VrSD1e(gvBd.&;}%!d/TBH[bC,kf4?e=J4n()D5q,e[-x.c1*h0fU7jB' );
define( 'AUTH_SALT',        'LOTAgfX}/bj=o9yi!B7:D(IzN7TDT)s^{E{0?Yoy)Qlgn)0Nw@hqL`p;U2S0/z4_' );
define( 'SECURE_AUTH_SALT', 'jBC@A.g66LvbxQ0@l^CnEPQ3f?4b#BmXi>zL*TnENaB.4&qDaC^lr^n~&nB u/dr' );
define( 'LOGGED_IN_SALT',   '$hm[q-Vh+ e0iW*yCl@}bN5YbG$AE~KGLr 3**=r7J[Y~joL)cA_jUN_%s?gMV!s' );
define( 'NONCE_SALT',       'QD[PxXYu(G2bKY?|h5g^T}_XhRkZ_@lYD:sCVja)q!5w9ivvGB{V_}ysmO5:fXdf' );

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
