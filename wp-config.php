<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'YuqW2VhRBFA57L' );

/** Database username */
define( 'DB_USER', 'YuqW2VhRBFA57L' );

/** Database password */
define( 'DB_PASSWORD', 'f2qFrePWrRA31z' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'jWwWnwbh`#qd&adtQBIrle .,$@4Negg+iu18Qm+.8a=^{0UXF!IG]:S)z?e4E;E' );
define( 'SECURE_AUTH_KEY',   ':<5$R5NbWg@x[DxGUV[34ikdGulhT?oDN5k|Kh#nW4ZiP*%=3pxkS:`GCBe/C;ir' );
define( 'LOGGED_IN_KEY',     'oOU@`h{/%gT(7GU;R$6l,R!P=*{`HE?Apg8MnKSYm$ Bi(xw#+2j&d%4Q4JBPH9]' );
define( 'NONCE_KEY',         'wbB^ONj, 68tEov-_l:Re3:Q}FJ7Tx`2l[,Tu55*01R<|AR{HRB(JAT%%kuHLG5=' );
define( 'AUTH_SALT',         'G[.I[8Y5}R?Pz%@eVq:F(1AIiV 8]TTwZ9$5Y0C@@5z,t-4w7%{/!,Z~|r~Ob[?m' );
define( 'SECURE_AUTH_SALT',  '`z nlsDqG!k7%R@pa!z2gp`~5?{?mvuR9mkOhQGg8&t.z8~Izj|C/hF*xWj^8>RY' );
define( 'LOGGED_IN_SALT',    '7toOw}t8s(?3D<TkO+FAg:01oI/aPz;V%HND!,8L]K.*er>mw<NFK#(=o6^ px; ' );
define( 'NONCE_SALT',        '(`ECN2c]CXd.v#qEP=Tz>@UM!_H~@cRC%>WMS++Y@lJ-J]AperXGUbND|$T|yP>Y' );
define( 'WP_CACHE_KEY_SALT', '5Xs}}oe0&O#f;^RELaHI&0N]`+{6Z`!;UXGL_7VpP{Fs<#^n+/b-{6EjdqN7?-<]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
