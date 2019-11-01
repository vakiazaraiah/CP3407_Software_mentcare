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
define( 'AUTH_KEY',          '{N:AuR*x4{Fm0W#gIq)X,W{#/b;*=:a3`id!$mrZ#GZ|Oj9xwY3TucNDVKd8hw?[' );
define( 'SECURE_AUTH_KEY',   'HpVL$Ho2;]/Sr9J)v<zA8i.+dbvmY:eq]E|Em(%l]m1b~1}Sqd@D~b[y`ua.*1Ue' );
define( 'LOGGED_IN_KEY',     '>hKT@io~}oPsQMLFnw`_/.H.~ua($TNXsUjjYQLMqAE+>7_P.Et]M;[Av%Ovi*au' );
define( 'NONCE_KEY',         '6[bo6xl qs>o<`(0K0 691.S3QRBb]CmQ*Z#jsFYVrvfOiz(/p9W>}]RegK-qX%=' );
define( 'AUTH_SALT',         '*>6 mY:5kVvCWmsqa(Gs$>?zdn73zaZ{32Tm[~Ne(jtBp.!!] 3`-NF}-4^%L +4' );
define( 'SECURE_AUTH_SALT',  '@Pvt8xnbjjc[rv6N.9d&kh.$Cyxf}.7laW+4<h91FqN6a2oEVvUe/[DS}[=?v#e4' );
define( 'LOGGED_IN_SALT',    '-py^Pc`5 $.8PxPcdn:9@DlgRgy*,*CMmb$[@M1^/Kg5Ao{u6s(0bC,eDx5(VY@L' );
define( 'NONCE_SALT',        'Mifox!*96`et{S@`&.%/xD15&2`n#SP:Ci*dY;?9GA3Ge?Hx]WFu<>>9JKbt>ACL' );
define( 'WP_CACHE_KEY_SALT', '!5_J,J%4MrLhv},{=@rX1oTx~VP_yV1Fbd64K0AT4g|T@^uM7P2HOa{m?v&fY~06' );

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
