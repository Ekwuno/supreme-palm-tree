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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'y9xiWqlsam3DTbFgl+hXfX5Vc6y/CSWgrraOzwJYzNXLRMCGx7L0jCpN2Cq+cvH/nyqujKAByz0wiHPLzBH5LA==');
define('SECURE_AUTH_KEY',  'JSWtcB5Gkf6aOAsVsvXkO+dh19dNbnlVwpnLexCUgulkLhdn7zhwR3n0FHqV0CHmMEJZMg9VKCZiJtAjnpKXgA==');
define('LOGGED_IN_KEY',    '1jAtGknnZf29oKmly+jxIMfsEUrbtqO/NgowWYO1zwwuvjUMsy3uFqNZossqJHetfnDX5HuTsJGPEMZXMKS1EA==');
define('NONCE_KEY',        'q/8AmU6IzFeFY5hns0yN+8QUHUx9gq26RSaYP94q0OKwjK4kBCX5+xNhUnd/fJTX3Puah5oHi5bJ1buqMFBfUw==');
define('AUTH_SALT',        'rUEkV+2yrf4hYW3jWmwMEWPTdFmtHAL84R5RIbFXFN8a8+eYMDAx+xS4W2MOBdPnKiEBypmgE28vFkgmkZpI5Q==');
define('SECURE_AUTH_SALT', 'C361Nbwk+8Yovr/Y9IY+SlR0D+HZW/gEV3Degn7b1Fp++xhnnHuFTdpqpU9QqSq7auc8Cc1B+Yi/NHt0QTfRCQ==');
define('LOGGED_IN_SALT',   'dPDpqP6x85yKy6y1rNDReAUSOTbdgkhht1IeMoFlRhkd3B/sAc1wi7GWNYgIFLHPcnx2ufduvoMzcP0rghbJvw==');
define('NONCE_SALT',       'Oyg5T1nQ7YWVQhC634J6RqFBjGKEzOr8stKrZd0yYbQ6eFEmToSzkNhxBWFdbBCwPAp5kwri9Q9h5LkdgMD/Ng==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
