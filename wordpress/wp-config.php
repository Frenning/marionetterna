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
define('DB_NAME', 'marionetterna_se');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'rino8V5gI)fx><Xr*3e^;@Im*)9cOgOBP9j+8uDw!_BL+x-9q34 m@q&Nyib6w55');
define('SECURE_AUTH_KEY',  '!)+Zl9C[_x`ZAkc*U|itmR3+7&IoMS+8Izz6[4.k(Gt3YYk=,<Tm.^PoMDjB5jp<');
define('LOGGED_IN_KEY',    'hMV.X4y|6{NwJcN7B5Dh.|)l-.E4=&El6Pz;wN;j6dR`_@ldJJ/+VxrFZK?gZ8N?');
define('NONCE_KEY',        ']maa:n(%!!x&$$#/!VaN|a5YLE(w%JR1y-g+U00;lT1jev*|Y?~HA[3M[^g& ~@w');
define('AUTH_SALT',        'iX5B}1JjU/Ig<>N-nxjl38!Gsu>>y!Wg*vxABapM$UF!-MJKPT?YJ0#.+xRlve$+');
define('SECURE_AUTH_SALT', 'A5Z=ig^rRhbDBtq`u~><x YE[WncI;$2z3IAqk:$ ^MYJRtItc_Q)_y*Wd}Uq<-n');
define('LOGGED_IN_SALT',   '+T?ct}iaurMRRg:{|o%3(U{<`|]-J%9sqw+Eh`x~5OYUh^|8sM&[J9x,Bh1L:O+h');
define('NONCE_SALT',       '$!+.&*5XcYhWw,PHLQZwkd]}0j3CB0BeB7W}X7+mydrG[bC,3*DYfWhYIMtNj-z*');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
