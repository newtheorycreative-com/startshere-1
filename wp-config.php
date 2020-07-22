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
define( 'DB_NAME', 'startshere-1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'oZi=1*_Ta9K*Y}{}/hFUiF);!L/`?8Jxtcpq:+7GoLcl+fHKi*+0?t/Vv1fAh!0F' );
define( 'SECURE_AUTH_KEY',  'VwmO!m5?g[PSc^1S0,~sn::KVD+~*h->$mT!:&@_la6Ke?@rr6ltwueuWJBUa#w!' );
define( 'LOGGED_IN_KEY',    'x^tDy#=i2X*@eRCz*cOu,G 7ykY[pkoj=GwE$E?S=c|:>WzeMeGODY] $]o($Q%R' );
define( 'NONCE_KEY',        '7E9}z1hX=6Vus0+p(#?46DYg)jrr>^o~Bye)Kf.Nq;Dnna:wF(9YX.P9|S&hB/KB' );
define( 'AUTH_SALT',        'u`/i@toT%}jzBDF+ xa-yBM`]7P3y}mO:M}}K8W:bk8is[_zu8o$`B#:1(#/Ht#C' );
define( 'SECURE_AUTH_SALT', 'td,ly[W&>_z^`d6&&kby9|Q)Bo!EG1eL=J2).C7[MBsMqBm<+B^lV34[63&7M^G:' );
define( 'LOGGED_IN_SALT',   'UQTCo|nN-BOk$^5rzq?_bW/8U~uq<{&i|L50LNs(S5:*Jt2JY+Rb3)e<4,9B!^g/' );
define( 'NONCE_SALT',       ':b$b*@>2`x+BvQKL;Oi=EGstm.^.rS4|Hp|hHmDS]YG@<,fs;HdC~ f[j 0Q}iZz' );

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
