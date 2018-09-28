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
define('DB_NAME', 'id209554_wp_01702a174c3e25a3ade9b25acd7a8e8c');

/** MySQL database username */
define('DB_USER', 'id209554_wp_9d43a9966d795cbb5431121015e2838a');

/** MySQL database password */
define('DB_PASSWORD', '3f4fc11e23dbbd17ca71c05eb1c584d753a71458');

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
define('AUTH_KEY',         'zdiixw*KZ2tuzu$*!PP3x^HICe#GNxEq1YzDmLWB');
define('SECURE_AUTH_KEY',  '0OjCsXzVXzocKfLXj!@aHrrsg&Ps^WhOArXJKfSZ');
define('LOGGED_IN_KEY',    '4JS1LWghn*ieNzwLLvq$Ly@*^r@#wqoRjJlh^rpF');
define('NONCE_KEY',        'NyYRElDS6Os5wVfMc&6zBWjO^ufm#uO4QTnyOMd4');
define('AUTH_SALT',        'UvNphOjk$&!2tA0NK5d9CbI1GjCVeVpKhhmoevyQ');
define('SECURE_AUTH_SALT', 'JHcn!3e6NiO*jJbOcRCg$OdWfpUj@qF5hGQQqXgh');
define('LOGGED_IN_SALT',   'BeDLLCIb!WigAmFD2ZHIJA0a6bQSDDV$T@@Vt7TT');
define('NONCE_SALT',       'lMJGhW#9x24qeGr!BNo$*aj4@WpGkbQwK@jdoW##');

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
