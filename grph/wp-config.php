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
define('DB_NAME', 'grph');

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
define('AUTH_KEY',         'R|(Iu^B4Y-fpR?SJhU`D]nrr6Tr1I(++Rr}vi(jygIq<uTkMKY]XpZgZ?D>NV@l@');
define('SECURE_AUTH_KEY',  'a143Y!tj[k]<1yyvyQq:#1>HRWT3(fU4T(8{N&ONpwG|N,q_{#5}e,SMw}B+{Bu7');
define('LOGGED_IN_KEY',    'J+vw?5f9^YoNHUz@55]Va/,Qztx*yFeR)2~qF!m>;^;`9f_{yK`1{9T3V1@qK;_{');
define('NONCE_KEY',        '[g4P>9|}hMsf-_ V@!,V_0@~g~E6HKk%uf{R?NqRKyKs9^e_%s(0KqCg@tM=X?<.');
define('AUTH_SALT',        'nr 3pO1C*xK5XP:f25S[3:e!mE,$SimT~.7FBvZ~Je7~,QC?~<wHfdQqHnJH$Ish');
define('SECURE_AUTH_SALT', 'Pv;_<Us~S!v$n7gn6=fejs49W*^Po88nXu!1+Y.5&W!I)W6^&w#p$!Lf*t3DG*[f');
define('LOGGED_IN_SALT',   'ri?KY_G>IROQC8&e=k/*frPO5uP>v6byM1w.K@J(I!+))]f.Nq`,hl45K6?PVF<R');
define('NONCE_SALT',       'L/W2urcrtt;]h]#_?2kv9?rMX9Hp%dK[!7tElPL1$U=B<5qs{D_C_QzeaT}?7LF=');

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
