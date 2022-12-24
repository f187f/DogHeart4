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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.%BG!ULq]intO.vIy{8W}AnSlZd%@#f!h^Q7NGHc|&F.BOE|wO]?*7N>3-a]*i8Y' );
define( 'SECURE_AUTH_KEY',  '*t72Q4OPpa!gegF0H7#H`ZSX13pkee^b!kDs82N<Lcl.ZqnNA`h8`%$L:4eTvAon' );
define( 'LOGGED_IN_KEY',    'Ik4r0yL_Z$y;LFQ)/lnp4Pc!M3N1V((+E#>O[?)`9*#6#<q2EpU77O*yDD3bY4w8' );
define( 'NONCE_KEY',        '~U+sBn`HRnfc};wb7k)ME|x`wgxJk/r:9RP#8iIg[XxtT`O3 l^6g2v.0kRP57_1' );
define( 'AUTH_SALT',        'YSwIxqf1EhN)l<7:ih<eS8N!1R4_ ~gzXwtu6DcL xX0VL-y3s+[w=BY0.z3RJBS' );
define( 'SECURE_AUTH_SALT', '2s0X7ws%7[7z*&fgs@(f_nFiZVHiyeIH7!^lVE[cpK-E;d<qMxS*heD5yifg`CK0' );
define( 'LOGGED_IN_SALT',   ')XTTy`q!,BZgP-|_k_Q{hc?%[X8mAzu~-:5.]bqe&{Nm53VFaL:u8yQ.v}u23k|l' );
define( 'NONCE_SALT',       '9Mr=aq{K?zRgy`Xj4HYl.rm])r|BL}BGJ@_m#E,>J3?m_!^R{D1i-Ku1Hj0+@9,y' );

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
