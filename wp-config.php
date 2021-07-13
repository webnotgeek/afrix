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
define( 'DB_NAME', 'afrix' );

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
define( 'AUTH_KEY',         '&!]?cUyXgm<HBhc-eGG1}}#L>f87~H|18IVB{ZkqbxMIS,&#/-E*?i]FgN$8cY{t' );
define( 'SECURE_AUTH_KEY',  '3[tE8Q->@BdZ(%@;~9GXbao:pN(+m]d^p?M!f,|!B;a_kY4RBA8?kgrR0tj$i,JK' );
define( 'LOGGED_IN_KEY',    'bx|DqC:1hbsq7`3jjOAK|Uf|OSm+uBkrt,OHjQ2?:2|i,>2n.SE?[6qh`shS)=X2' );
define( 'NONCE_KEY',        '+mK:~DI&YSAnG+@Ae/G&pUue ?Ccx0p5l:WaqYvp7JzTgV={ClwD6XR /y=q)irV' );
define( 'AUTH_SALT',        '4YAZDmSk:4C*I.yoJR(lxr8k5LM*s-:8tM_IEj7Ufgna3suXw?_A4u7u;,pw,:`z' );
define( 'SECURE_AUTH_SALT', '(6QP2db|g=&#=mb#7wdN5Xu+=x*Ne4tdXYFNlg+FK|nT[-{+QtpmvtY}S}v-PToW' );
define( 'LOGGED_IN_SALT',   'E~WW8:S8&kmlIy2[GXI}*R>sb!v+bp/hfS93bRJ5P!Q+O7PQt-Td;+bW2XLksv:)' );
define( 'NONCE_SALT',       'ljd<$R`P3`2QByV@*hcPu5$0{@N(Y+Av^XKerQc8tD9P?-x6Z%R.laJz-aXHIo_t' );

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


define( 'WP_HOME', 'http://localhost:8888/afrix/');
define( 'WP_SITEURL', 'http://localhost:8888/afrix/');
