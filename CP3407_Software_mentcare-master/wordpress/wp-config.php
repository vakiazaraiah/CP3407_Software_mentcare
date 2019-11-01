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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '1u~5H;O{okM=jB5im[_<qA)gZ_W31SVnlUM@q#`0i~!}T{ut?XZPG[JlY1/35YF:' );
define( 'SECURE_AUTH_KEY',   '*<[&N;T$sx=FZxwD>N3z.a(tKJSfC(( #bQD1E{IqY:N3^Jk+Y:L4{M(~|tlAG]d' );
define( 'LOGGED_IN_KEY',     'I[TE_S=HDq^*eV<eB`%</qk^{J,xw;7}2zIUA^o,JbxZrskH=VnA^~K.K6+`lPS]' );
define( 'NONCE_KEY',         '/lF:F7{-s/z8qjxkqELA,7B4!eubwp[5%rCDi2ULfA;-V;Q4hL>axYr #&!d!9 &' );
define( 'AUTH_SALT',         'Al]@,cG-#&0Kf=u62015kL[Nl,>7M|uM],UC~+`nUMQBT~.J> !))e^mZ,o>1o/I' );
define( 'SECURE_AUTH_SALT',  'hv&u$/{}J/%2[QknV)#dy#d2)#{gqRZ)AzzciVVrvbOfcpJy#51aWZh[4!L>^t66' );
define( 'LOGGED_IN_SALT',    'f3Vp#r4^JS(TG+hU^J`;`Y9(=J_Z55}~<+j!p5wqJ6;Ny 2-/NJb.o@edHvJ 0ZN' );
define( 'NONCE_SALT',        'gVCvZcS!0k>Ck/(=dnhR6z0`_kGxy!C?Ya/+%[V9$3N||Fevb`o+K{#`j0C(a[0<' );
define( 'WP_CACHE_KEY_SALT', '>u5CxS1)iD`m#]e+Q?K*1x@K(!9T`]p]GFzvw<QJlprIRUk_Twnpgg,5f}NctOwI' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
