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
define( 'AUTH_KEY',          '{N,=wBkM{5^E85yaa_BeI~H-JS1)u3a]%+Ay}ch9*_+h@`HC=0>8rc?<T(hj,N_3' );
define( 'SECURE_AUTH_KEY',   ' q;JSxkx{ev}mGfY~BHSHxno68XbtnV}klF&dos*OTe($aT/Be~Ft 6!+0}tZN(n' );
define( 'LOGGED_IN_KEY',     '!b~rvc94_0~<!4l!T0yz]%3nMd}|Itl!AV&cE9%QI;)Pq07H2O9J3O;P&}m6{%4~' );
define( 'NONCE_KEY',         '+OD.ra2F0b15b(^d3EfO82o$2Y2]$yI[|Mr*&L7JTj/.[(^{8r]ea<wAI2tH4pL|' );
define( 'AUTH_SALT',         '&QnB,);881^o/%fF1b~f+6>PfDD_eng^Xvu<C1})p+>u.u*kz0a@0Bx+$b82}k(e' );
define( 'SECURE_AUTH_SALT',  'wCvJkd$GihO`at9$X;%]ij:^:o6Hb^d-=KJGYm>]Xxr!z$Wb$}(*z?`BNeHpx.X!' );
define( 'LOGGED_IN_SALT',    '6&.w~Un&x@D-NEbd;K(YDJx6s5Hw;xDf4,*Ac_Bz2PK,xyU6nv3}.a8uzI<#J>w,' );
define( 'NONCE_SALT',        ';QV/[4/rze>#D7>K|9}x=UYq54yh8r[Ff.bB7|-[+DI Yt~%1i#<5uoU3G-fjaw4' );
define( 'WP_CACHE_KEY_SALT', '8v@y,|fPvf.kGNB8P,vy2D>>R?rM2}d&y<Gn:B0|w E=BURb!_r(Cl`^*VQWR=[<' );

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
