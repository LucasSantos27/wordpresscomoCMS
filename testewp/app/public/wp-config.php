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
define('AUTH_KEY',         'Gxn1OJVYhKAnjMaRQMajqSbmOBdtXzLCzLwir2glBr1ZdOp3Bj3K2SM6GWEga3Hc6/Ic4t5Dj5JZy9O0fl69EA==');
define('SECURE_AUTH_KEY',  'Lzy9uKnKGS4mC8zTryJNUlOo4nsO+qNoqFAPC0TnJGsqrpdDGA3ZKEXKGuLB5Jw5/naHkHQmqzJHODBur8eEvw==');
define('LOGGED_IN_KEY',    'oRPiF7A6MHD1suehMqDa6M6RgcKO8UmwATAwLxtONxY89ZcA3FQadJauryW+xe//zaTVYtEG2NBGdc2UIDQjXQ==');
define('NONCE_KEY',        '+yAwzDTAWgiZGGHbGG+Z0xa+00o6oKlLImwebT7J0vjCNrcs+DT6H0k/ndKQAJ2E1gJh/FIkeedHuo9npsUl2w==');
define('AUTH_SALT',        '95ml9XMyfonGN62yQPQ3HtkBdNfzZ+pGbBBRvj7JsWu6saJ3HkirndxH2wwITHf6zEF40+APO5j1jZc5j1fByQ==');
define('SECURE_AUTH_SALT', '2I+3FHnh1k40rzb82RotEjbZ5paK7Nswp9G8KNLmVybLL0VqdaLHfIidUHRq50S07+kXHxFzV6kDiY8PlOhnXA==');
define('LOGGED_IN_SALT',   'NJG+QInebu5BuL9HZ6k659M9HMR7Fj3ePXTKNxkZePX3F63IZukbTf2c2b5+V8HFGOhILIhSOp1yZaXpONASNA==');
define('NONCE_SALT',       '8IjJzPNUZ5H9sClQ/Fy5PKbpl50QBZhdGu0JM6pHzYGLcWFPs6/2hqmhTPkHmZ7Um4cEXcM+DbQDvaiPnaNvOQ==');

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
