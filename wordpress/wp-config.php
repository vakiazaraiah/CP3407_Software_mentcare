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
define( 'AUTH_KEY',          'XzR>0-E8?lv<[oq*[>&:;x[o.s<^a0jZI~O%qwah+V;?cd/c$d9a[ F-60{Y5Nju' );
define( 'SECURE_AUTH_KEY',   'N8?2%Gh q_/Q&S#<YQ9X7@bSJW-8LT>mo!2uF`!s8^t@IJ;{KKWodcrAeU&$`g5N' );
define( 'LOGGED_IN_KEY',     '@.aQ9BN9?Ij19%6T(J=rT ZsNY:YFX/A7z@d %m[QWrpo(5l8u,4S05H^:ma7B0]' );
define( 'NONCE_KEY',         '92XO3,dRh1dHc2@=]ztltuNnKM2ZD*MAFBO<`{Y#rZ^AI%3+WZ@R<G$hqcp<*$/0' );
define( 'AUTH_SALT',         '6I!KD#=!.:xNZ hSExCCukHoEIRj`U8G<_28nnA}8x?^ o,(mEqjMh7eS@l4%4`N' );
define( 'SECURE_AUTH_SALT',  'fq!f~?O;$a6^ULo^KsMPNCz@Afg:b#~WtuGa#03_9b;#BZ*t$;Up*do&j}!GgYaR' );
define( 'LOGGED_IN_SALT',    'M&&LT_}@uM/j=##5}sXh[%fvL*^b;g#8oX#sC_IeI};EYIga[]f ]F#B0d72{jt%' );
define( 'NONCE_SALT',        'IzjyQ!aO19j9o0bw,7Au1C6k/b7^N!Nim(:#mUQIFny0^d4M#19:0:Z:cuU/uK0%' );
define( 'WP_CACHE_KEY_SALT', '`S~=N(8:2GZJeF*~Bb=hoeSwCaS2>5::%7T0ia%OjRD*,kl_I0xky^OB]N^jW/X`' );

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
