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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'xLW>)?UGcPqwl}jyk>a5?4vv7iaG/o]PG7aoe6`{gLyRwz.<dTR794G$5l+pMKQ^' );
define( 'SECURE_AUTH_KEY',  'Ptg[tfoNh*r,fRg`O*)24cPadE8)T-1d!P^AF^bKlVh:)R8I[D&Xg]Ru~BDfspg2' );
define( 'LOGGED_IN_KEY',    '9n@ekQUL|g#,F!1_f}xO_CN/COvOz?Wxcib-V`D2~7,Lo::hZVpO3o(S550ZY4od' );
define( 'NONCE_KEY',        '1LV{:fO1B.?2}u*KZHIby&OwspO>.~rPPKaCo:v~ACNx:%d_I9iJrrs12<8~!Q*E' );
define( 'AUTH_SALT',        'MnZR]+/!;Ip,rB4:[J<?O+[M-U,vjV$Z}9EM$#eTvlZlKe`-C]?7?)X58Mqiu}V{' );
define( 'SECURE_AUTH_SALT', 'qF-@vC_#R$h>V+3xy?dl.htlk,KqArs4q5Tm>urp0zS$eY)EP3T0,f]Y]tiFh7;|' );
define( 'LOGGED_IN_SALT',   'zdBp!Z=bW$}>bfX[:?M~gkG7D}b@jR=au~ixg-*H>I86.KgS`b*U0yi}} 1W#G8p' );
define( 'NONCE_SALT',       'S46B6{w+KX}!]w2bkf<pN.W`=8%jN+_|do=d(2vl{DTx^2ytJ/k.^dn6MPp8V#ja' );

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
