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
define('DB_NAME', 'bilelamrmg781');

/** MySQL database username */
define('DB_USER', 'bilelamrmg781');

/** MySQL database password */
define('DB_PASSWORD', 'ZBHpYxp4Dr4F');

/** MySQL hostname */
define('DB_HOST', 'mysql628.sql002:3306');

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
define('AUTH_KEY',         'dhwTcEryznzFGAm3rYMQhJkbO/o+7/ZeCYxQvfYB1zQaUAWngGJsRC/lY9U7');
define('SECURE_AUTH_KEY',  'kO7ikf/bg82k1md+gKBQ5p/d5r1lc+x4W6c7QV+Y/HMj3YoIe5NYRXrMI6UE');
define('LOGGED_IN_KEY',    'pcWjRLHag1c+u/NC3Hh8MdQc9UoCY0PENiVOj2ffyprsWMpmWAw90+/mJ3/Y');
define('NONCE_KEY',        'NRn8Lv1M8bsmmK3NT2AazBlenAw4kcoIegzod2cCUq045YcdWeY7PQy7oepx');
define('AUTH_SALT',        'WRO4+4oHyPYTvQ+WbUrfclB4CB4WYtDnhCz0af9knK74kGkcESEzGBT2BH2S');
define('SECURE_AUTH_SALT', 'MAyU3zrB3xM6BZuo1tynQ8V6Dbf4YH0VUMaKIUMxMmGQ5naq6U1PmcMOo778');
define('LOGGED_IN_SALT',   'r8c3HCYn+L0ON6KhV7AINGi1A1qmjo43hTPm84ryB2m6h/HdrVTWzXhMSrfS');
define('NONCE_SALT',       '25GzdxycOSWTbIx27W20+MB3E5YYtJvIH6KqbmNEpMWv6ONPd8uR5vx+RyaT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod474_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
