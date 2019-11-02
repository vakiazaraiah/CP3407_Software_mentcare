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
define( 'AUTH_KEY',          '9FErv~3Mjr^:L gVy7[mONWf8^4`?Wo,8=GFaY1^j)h*BZz@6S~ymkG~+=K}$+zb' );
define( 'SECURE_AUTH_KEY',   'Y##<NT^s*~oQRemG=#P%H :5D*gG3@&hDtA x[Um*_Hx7(C,CLS#;8ki+zlCZZ@g' );
define( 'LOGGED_IN_KEY',     '4y%c~{Gf^xo;#oE9dBUF/UICzcc);~z,<HZbf FqmRDz]-PNB5g5tVln%ysrBWUd' );
define( 'NONCE_KEY',         '}Js4zZAy%H,{RT>+%._R8LD6Qv6Q8w~(,wlC=%mf,Xj<JOO._AF+&:6D)a-Khp#Z' );
define( 'AUTH_SALT',         'S{$e-w~.PjB++j3ko{J>xS=2z3ykeJAIg!V,@!fZR m}ePxSENo&??Z_`hWJ#Df5' );
define( 'SECURE_AUTH_SALT',  'rCVgsGVMG#8g|*uKR#^/18;kVP1k~t-<G!+a7dkqV&FV3: v9c3ffUFnqpgSY43x' );
define( 'LOGGED_IN_SALT',    'DP<n%wKu*Hg^uvj?!3~1p:UO$tt.&.q`Y.gK()496Q-zP)b0~!6#os+?hO7IC~sl' );
define( 'NONCE_SALT',        '~+C.Da@y)8h~%yu@E0!1^LQ01`3y^^JY6%!`i}Bkv@,Q%Uqa`&UF&^:|4;s~q)f/' );
define( 'WP_CACHE_KEY_SALT', 'XCkxdhD+0|W:q~ =memt[qF!L^Cn|T% a]P.%xJ@#Y.*]]{LUuz,VAvOyb@5L@Y6' );

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
