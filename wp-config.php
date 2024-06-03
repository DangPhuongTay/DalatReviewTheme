<?php
if (file_exists( ABSPATH . "wp-content/advanced-headers.php")) {
	require_once ABSPATH . "wp-content/advanced-headers.php";
}


//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define('WP_HOME', 'https://sapareview.com');
define('WP_SITEURL', 'https://sapareview.com');

define( 'WP_CACHE', false ); // By Speed Optimizer by SiteGround

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
define( 'DB_NAME', 'sapareview_test' );

/** Database username */
define( 'DB_USER', 'sapareview_user' );

/** Database password */
define( 'DB_PASSWORD', 'ElzJm5Qmvv' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

define( 'SAVEQUERIES', true );
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

define( 'AUTH_KEY',         'fK$--1f)7sGP27hN<1@gm3rIz}qxz?k+GT)[<!:F-MhUzq3F<S)K|#eUchUV|-E]' );
define( 'SECURE_AUTH_KEY',  'loy}+Rv$<y~e&:#_zKr;y/]=Y!#<ws_);PlRTQ)f*GGo;t[3tD({l(<mud(Y#,OI' );
define( 'LOGGED_IN_KEY',    'Ig*0HnE 4tde3r53iK;n)g@+`:WB~Jv(C/oEA8|=&FQuzgy]SOu1.9r9~|SNfi{!' );
define( 'NONCE_KEY',        'HyYt)D-G^up(_g=szp WiiT<.b.pq+-QHwl~B!dbu2=ANQV7ev;[{>RYhfC~?~m9' );
define( 'AUTH_SALT',        'dqqcloAhVCbn&FBwwF=LpLu;SAM6i-Dw8wvR@(+$W.dY&Jou^lT@JqY2%fBd3]a?' );
define( 'SECURE_AUTH_SALT', 'nK%C4]<L*B }px!m3v?q<$j-/M5[q^Bc;J#21P=Wfp-rEV7_g}T>%{Kg8Wz&7;e=' );
define( 'LOGGED_IN_SALT',   'YH/fg^UGivV}jx(V7nz?RD-o/GZ+mwCz+:$q:NL&rTx6^;)7_,aW[%N21dt|eLsv' );
define( 'NONCE_SALT',       'W({;Px8os[P}[hGpjQQ#+[YEM}$S]v/xS`D_b3WS5fc#YYN-%JDlo0Bl?Yqh[S!}' );

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
define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
