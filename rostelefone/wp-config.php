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
define('DB_NAME', 'rostelefone');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '8356');

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
define('AUTH_KEY',         '+b<e] [!K<J_s!cx3M[[Er!x!s-so0vkPRL|4-$c-30?ggq4ongewqNSGQji=avI');
define('SECURE_AUTH_KEY',  '-Q@7>rjANt %U+7l@~A}z`oDV%)=Pe08nbkWsl<ZACD%?wG^|!E33@iarU3Vuq[>');
define('LOGGED_IN_KEY',    '.>{2Ro:5u%0?(,jLCQy7,ohc?y%`aqqWvV/lt=x7nA5E,SwZ0Q$[|k{Dworw#9oA');
define('NONCE_KEY',        'gsS]N2uQ!i2anz&s8DKdZh{h|s7<FoZT-e^WECQf+9d]=la@|AvYdLB!j[c`Vkj^');
define('AUTH_SALT',        'C^wvdT}:Mv%@MZ7$D@[Ckt{_VUw J[swRM7kqRf]aSfXIg K5jt^eDL;IpFOKBED');
define('SECURE_AUTH_SALT', '+3P2>X#%X1?/?=,htJM~sl2xuY&}Yt?1.iRklQl3jH)(WWwMEOW.0?y7 17V6lUR');
define('LOGGED_IN_SALT',   '-)g*TRU__4o)I:yS#rtlA24 *2H0kSZ&bebb3zUkHob!qoFb#pQ49<9=1I[qNi4 ');
define('NONCE_SALT',       '#14eyv4V|?#T=X;rt*Ag 06Qq[`bIHPcj[]8Ktzm9A+]Sh7 |f#MeYzuygaMs(Ek');

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
