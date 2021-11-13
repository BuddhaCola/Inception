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
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'P?.RcWug!LA);SW^e]ER$<DUJ</v1<ujMes!KHDXx~#9&dMgtr+v-iY,-2qk 5l3' );
define( 'SECURE_AUTH_KEY',   'US8Z)[}M_DL}:XDUXz2%pHD(!~aMn9<p/grKmHLxGB{=H|tE4%RcI[,>g|#djL7{' );
define( 'LOGGED_IN_KEY',     'rX-@S<!k;O-G}xxPO2m7}S+Unz5%&5>Dzo4]rupaiYrI^m84E2YEM1(WrW~3}RHa' );
define( 'NONCE_KEY',         'P9~e^TiihhF57}3dR 40,dx=_}{vtaD+3vg$$/i9ZbXZ}qbD=KmU-LCW2,Cj3V>k' );
define( 'AUTH_SALT',         'HFl=dt-Yhxh;~v|MyC3-bHxDVsBl~*Yir8BM8.B(Ka4Q(zs:sBZA-9txXy8:`0Ls' );
define( 'SECURE_AUTH_SALT',  '7)_;Zypx,VK*d-Xq+v>`]tNKFJnhaKSZ7w^?GdvRaZ&S,B]G^P5WujswraM&2j%{' );
define( 'LOGGED_IN_SALT',    ',^#{BKz0OV@[h?&|HU}`=17R7Ur+]%dFjY6vi p>5%iO^L.w l^Ikmis8wx^*IlZ' );
define( 'NONCE_SALT',        'm0Pr3PW[nzCjC5~g3;oek68gVw&/<)R<g9Yq!KBqnU$pf(5i;kE&oRlLXbR)Z+!V' );
define( 'WP_CACHE_KEY_SALT', '7G 8S9Jh0$pE;.IotPbA3V8ctv8e?<;hKO}|>sK%JQq]yYS4g<X)70_pVR;a/@Q`' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
