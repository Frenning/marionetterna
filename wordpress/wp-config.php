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
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
  include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define('DB_NAME', 'WP');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
}
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iO~v#a4UIZXk?V7Gwho_#Qky8O-o|wi--1i&Yv2bVZMD7M?/ z]*^kF[^ $h/Y|x');
define('SECURE_AUTH_KEY',  'I~|A4?|@n jUD/T$*+^rAa|rd^C3lDujEnL]2{(;*/|w5iHC6ca7pBsbaK0TehOT');
define('LOGGED_IN_KEY',    ':FV:ulZEt8J-S{S}q@mV*b9(Gb={h3^|=1SRrJ&tyAy2b%k>C^O#rk~o4Mp]kl_,');
define('NONCE_KEY',        'ktjM<;h]koq-bWb{9XHn<bIw)L3P*9VbkZ^~c-T+oqSd8X7Qn`4%u9y.F|kxhFZ.');
define('AUTH_SALT',        'JI.P5Zz-B5+xO@8)x8P$K{a]o^l+lkieo=(AjlQhZ9so0K;r~YED%@=wT?uax]t+');
define('SECURE_AUTH_SALT', '@MO3/j)/$H#,p~:!;4Dh`G1^A?.VbHHrNScJ+;n!?/T<n3=h-dbr#ZI2J=-ye):|');
define('LOGGED_IN_SALT',   '|V;*e$fw~xs.P?b2utAYNl*pOAzR8,Udi}6fW*[3R}OUQJ*,)u/Q3{4zP6S~+z~<');
define('NONCE_SALT',       '|?]$`|.we A(gKU -C+#[[L.]R>_B|$B}S<:S^&D@JKK#$Yt4%$i+((jR1TFPLno');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
if ( !defined( 'WP_DEBUG' ) )
	define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
