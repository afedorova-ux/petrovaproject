<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_local_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'gebnxQyAg7Cf6VlRTLzvfK6pSBaFiX0ACjq96fBqrtP7JdHZmtJFHXeHBz2dxEES');
define('SECURE_AUTH_KEY',  'NNtOnhbimGLRS4ulseaYvSf0r9FUa58pLyFhbvaiPlgPS6xlFWQ6Qv6OhZYWP33v');
define('LOGGED_IN_KEY',    'T26bbTQBAEYArNAh96tOtxFA2GK82RObJDgqnJLL289DuGuEoK8CGV9cHmz2Foib');
define('NONCE_KEY',        'woo9XB8T64I90Lzk84mEKJG4TJ83sgzdt5NnEt8YtA7yQj6E0P3v8J5HzUx7yaqM');
define('AUTH_SALT',        'h3NQC0IIs6yI1G6TKduCKzdy35ebGl05ec7nanVjXC7iEZg5uX93wrKCO2UPSvFB');
define('SECURE_AUTH_SALT', 'ICBflSgXd2pjjLCxafLO7Um6PxkSHfoKMHdsUDoqIt3fUDHEKdnaN1KKcMRxpjw7');
define('LOGGED_IN_SALT',   'L1CM35tj6F2lS8G0syYB96f4v9gDbDXBx9iWJoLR1PbD7EjOloigz3vwFvFkM0ic');
define('NONCE_SALT',       'z4Twq6X81OqOrf0FWJ0RqiDgBy8EUibh8ytKs43ty6025XEO8EfM2Qmj7cORqznZ');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
