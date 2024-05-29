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
define( 'DB_NAME', '****************' );

/** Database username */
define( 'DB_USER', '****************' );

/** Database password */
define( 'DB_PASSWORD', '**********' );

/** Database hostname */
define( 'DB_HOST', '********.mysql.tools' );

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
define( 'AUTH_KEY',         'eeM$HvP4]3H 6OZ_x9rq9(&MfsautXjKp2_)+<3vR%n?}]h_6z8:IPN guDpqT[;' );
define( 'SECURE_AUTH_KEY',  'GJmw$Y`hA`=RGh5V}-Xt$zqXT!X3d#o>wBHt)A9kFqL=.)t3w-wk_8Z7cb=lUs+_' );
define( 'LOGGED_IN_KEY',    '83bLG4E&YoP:s8-e_EPBN;,~/{ Q+$TAT8[L6(>0H}j*-~D<*B3&($OLhS>;h3KS' );
define( 'NONCE_KEY',        'N`KGu(7xA]5M(rEW|[0Oi|N2V[W?1?%}!JT@^OE}31?_)n0F]S}f/B(_t?$*YfGF' );
define( 'AUTH_SALT',        '{mt:M_I8r{TJ$!^F<QrSPRaHrcUJh8;dT-IYQ3dDyr.xyb7)(M5Mzkh)uj`EKl>I' );
define( 'SECURE_AUTH_SALT', '2?^a;N`vcY7O(211A_FX7a.V%al@z1y&lFaeZqK=9ZV36R ZfC4|7k`D]H1`{`+;' );
define( 'LOGGED_IN_SALT',   'sXZxuJzPYcXa1S:]>*Q[a]s4,%c5KBN~F<9#LtE^l=G->wp#{&Z,ym_PyIGF=Q:C' );
define( 'NONCE_SALT',       '&DHdNRhH.h(`=e/!p~4%|6>/O7g hh$Y-#p_i?dU*}>7m>;(c(D:,v<+AUnL:Jd*' );

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
