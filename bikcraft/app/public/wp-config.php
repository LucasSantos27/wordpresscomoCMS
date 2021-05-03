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
define('AUTH_KEY',         'fRPN0kJKpavZB8t7bSAixUyhV0dwVZLf/+tUy3wL6xoiKle9UTEs0O62cFsBrJ3hAdwGEiReVZrD6S40mdj+GQ==');
define('SECURE_AUTH_KEY',  'TLy9f2TYCMvkl4GQglg+DbOh3IWNj8SJ0M6cpd70kYfO5u7m7f5c0jO9ex+V+qekegJ3rgCxVzZAbAsUnfcvIQ==');
define('LOGGED_IN_KEY',    'mSUnsIaZWX64VYoFx8Haz4aJuLKPKy7ijmfoMC2/kYKVo/slfjs2RBuacTIXD3ivGTNYTRYe54gOvWklVFUGwg==');
define('NONCE_KEY',        '1LIzqWY36ZOMoXT9dxFuJvkzP1S6UCZNu6IHbLIefTA/oJaeh2rRPIBhmZjxKZtdvO/DrTCw7aOSA9R9s2mvlQ==');
define('AUTH_SALT',        'dJ13z/NHZ+JhpzS4Ct6GuRvShm6k0Md7kO9atB7Mhjw2MyphZMX55VpGbmhd14sBQSCRHbDXna4LjdYXcTOE9A==');
define('SECURE_AUTH_SALT', 'ryHsYY8MDkriVuyHRG8VGGK6c/7fuS3Y6PbirZZQjm7CKlKkbpwPYB/AOC8FnlKOFb7U1I9aol0cpecBvhqZvg==');
define('LOGGED_IN_SALT',   'Jiopzvg3h42uErxnFoSl99JPm+WgDEbmBwhzXv+pBQdBemrVqCdWOdK010ujNlalprRXg+J+E1zIIBrr/AaU4g==');
define('NONCE_SALT',       'ak7otzQW8Be5LWoUZiM3epcf1v0Ue7IFkfLmHBwdvJDltlyT2BRKjekcKBBag7dEGPRXf+bmNTVQlDF9uskm3Q==');

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
