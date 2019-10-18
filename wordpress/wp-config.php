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
define( 'AUTH_KEY',          '=ODoI_9.e$V(sJ35(TOw$Sc96k2+W^r~s*266,Ro|MJ9~Qby0y@ol0h.TrZJszsd' );
define( 'SECURE_AUTH_KEY',   ' :d-9~z}N}sB/$kQ}GQ/n{_iZW{_Rmo08]kt{M 1Q2tB1@7m43r=Mgo& f#5DZG8' );
define( 'LOGGED_IN_KEY',     ')sQO9eh|e4@X=^,M#Bq5RUB@}F2I+l%5I,njzV52Q_# 6Er>@?@mA&zl&rY. 22~' );
define( 'NONCE_KEY',         'UO1`S>a_cI*bG%?@~/1A8gmRejnp..Gq?ImB$j_pXXsJ!n@ Fn.:$jw^;-U_>Ia5' );
define( 'AUTH_SALT',         'gJHQzP sWVv->Hk*w~gVckV)P|#Xt6l5X+w -3/gR{-fvt:^--FeS6(OV/_I{-$h' );
define( 'SECURE_AUTH_SALT',  'bwl{9SH;b)EFou+#Gq7k4)q}_L#,Mx}P/2(iJ}lFRR^,M[v.,#@(;</[)og=&08Q' );
define( 'LOGGED_IN_SALT',    'XKM2{|yz_XAt6_@4NyvjyWFzL8LnMP/?]HH9)h *eziy~*S?c@q]cYFYx>spwbdi' );
define( 'NONCE_SALT',        ';|O0^63:K&a]P*bluBWgR:%Zf4o$$!(.`2AKulj%/6vX1CwACAztToo6%Y#2ditn' );
define( 'WP_CACHE_KEY_SALT', 'E> LD)jyb;^YLSi6CzWjG1zvQjWLjroOIp@*U]Nl-IEBg$E%uFwo_aQV-4H[8}50' );

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
