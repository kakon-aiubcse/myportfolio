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
define( 'DB_NAME', 'myportfolio' );

/** Database username */
define( 'DB_USER', 'khairul' );

/** Database password */
define( 'DB_PASSWORD', 'MTd*RVC*rg8r5(xY' );

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
define( 'AUTH_KEY',         '|5FTelk~dGmPUxKG/mr-fZX3L,g%}}BYGlr;TQ^&v,d,*QLF&(V%,uEkv#CQckX`' );
define( 'SECURE_AUTH_KEY',  '##M&/V2YQ3(+;0BmzJ$*{&#s<|uz6+Pqd)J[)}kplPZFwk|jEdz9?]JibX)y%h(L' );
define( 'LOGGED_IN_KEY',    '`a2fEO0#rHe{9apE?E#lNs5q!s#E%s]/%gEiw@)BV|YnEby?tpSd;m%4NS^c9yaK' );
define( 'NONCE_KEY',        '`,,N79Vgs!_f=a?M|]v8|OSn0dk_zf@=Ma BZ7#KTS19kr;^`_B{]dAOhto-zZUh' );
define( 'AUTH_SALT',        'Qw<KpaL5}Jd[)#>Cl[Y$Bo6l)V+vSWi%S, XNj%b6+ulK-gB&tkL,IbeIY9<j1Dv' );
define( 'SECURE_AUTH_SALT', 'W8:czG_(6>1@TcLe;3>XKG]Yoc8K(Zw[_OXPj?XFc=rf/MmX nzN/1[)YU;@>oCJ' );
define( 'LOGGED_IN_SALT',   '?)X)&wYXOH(jEw*X6d}f_(GI.L,VCg~fN4q@46u>0dv2T]Z|p(C$>`6##:%L/<7P' );
define( 'NONCE_SALT',       'lL#Ehu>+G:Q]-!Xtf4rr.ll/E~f-6y5?wVX*-|_=/XFzn`z^3b[1JBihXH={J07Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kik_';

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
