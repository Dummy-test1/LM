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
define( 'DB_NAME', 'test_lm_data' );

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
define( 'AUTH_KEY',         '~WBtF[KWNx8eE,;0>W-+aD%@1)sQk#^U!s*L)*Mvl`F$ [o|Ar6oH}nRQGj7<V<E' );
define( 'SECURE_AUTH_KEY',  'gOweFO,sn+WJd_tS4e|:)uYFC4=mHxpQj,x8y9J4JwJdJqThs*X3827R[d%hwbn<' );
define( 'LOGGED_IN_KEY',    'rt=Hfph,~)rTtao#hgit2,yG=9pgW<qUqXzs=yNSak9Q&SfSB(f .r4+n1(Z%Q7/' );
define( 'NONCE_KEY',        'slu>/kSO.)8el9,`BEQjEo#r$V6[Xl?-&bJ!]=}}a:_gmL5x=Z.9AkAh}).djL[.' );
define( 'AUTH_SALT',        '[wj1{-qj3S[^`eF*SD5WX?s74o[qf0T[vHh&{DZH<^3*xPQh8NX<!,XK!3erbeko' );
define( 'SECURE_AUTH_SALT', 'JNC$<T-V?zql-rB;Q:~J[:L--gzHOMlJ_-7!-}V^#@R*_/il18=:BKz[|A!=~0cu' );
define( 'LOGGED_IN_SALT',   '=z:FTc(HQ-4u[DiL}ZwsraLJi3_gh~F5u;c|RhrkkIoFu]$fz^M)B=ZQs hmD5Nv' );
define( 'NONCE_SALT',       '`7 1l1@nu>Zj.W:/(}[eN&K|c}l0rb-BYIuA]VRdwy/K9%[4c 65(!j%0KZZnx#x' );

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
