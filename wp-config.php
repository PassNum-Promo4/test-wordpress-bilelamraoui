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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '14031995');

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
define('AUTH_KEY',         '1wvb5x}=r.I&d[_8[zpKa%~u,QoT{f=(8{A(eX-!S]s8Bqdd+x(AfNcUrL0(aXw@');
define('SECURE_AUTH_KEY',  'J}EF}lDzAQYY)+s(zp<fXq!8L1.[*gvQ`5V2b`qg3T)^yjmaF @e]7$py~q RX43');
define('LOGGED_IN_KEY',    'sXf}Un-Z*Ow`>sX=(A|nA}F3GFdm9IyZS;Fjb0OL[QCO>yZ<.;[XXb)}^6s9O-~9');
define('NONCE_KEY',        'a[~pBHHlu?^ooPorT&VI/1zkXRA1r;3t70Zz0PzP_#0`>Dz2n*A91r>,1^RsiJWX');
define('AUTH_SALT',        '0H[LQI$TvLRG,;T`Yk4eSPx_o=>O$NuvT^$L`A!]#F27$xnE0UJ_|6Tw6HYw!wzA');
define('SECURE_AUTH_SALT', 'd}s?,h3RO-^3h1F _xW9=x)xSD6Zd0KTH 96yn**l#;&-4Wl0cr)T*HXAG?aVz&1');
define('LOGGED_IN_SALT',   '5__:~D_LrLcxq1*g$w8s)H2z1a^vqi],=j;3(T^1J.&,+*;CCl4m<gU8fc+ZxROw');
define('NONCE_SALT',       '=ZV_7z6 I>pYS,WtAKj:8=RqR-kMXS,exA$=uVM]Kj8aartt`A{>fw^q/1<tWEK#');
define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", “amraoui”);
define("FTP_PASS", “14031995amraoui”);
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

