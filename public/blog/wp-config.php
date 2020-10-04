<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'adityacp_wpblog' );
/** MySQL database username */
define( 'DB_USER', 'adityacp_wpblog' );
/** MySQL database password */
define( 'DB_PASSWORD', '9pS0(8!iE3' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'njsjtrao5bjn9zde5ghwulxz6brwbe63nsnwmosgehsyegh93ztkwmfahyugzbjc' );
define( 'SECURE_AUTH_KEY',  'owtasm6mnj6rx17ehqgrojjimtz0uqutkfuoc5nyb6yjt1cnywcgckaf0llgubum' );
define( 'LOGGED_IN_KEY',    'emxcyccxb0w7h3letdj8b5zsdv3qeycxtys4pjgi1rcrsdohnj6qpkxpl5huptdt' );
define( 'NONCE_KEY',        'vqlnqpgbeajdefanbbsf6qsrzfnjxxjzjtmdeyxakgnr6uxq873xihdehx7efyhn' );
define( 'AUTH_SALT',        'u1xv9nuswj06cxedit0ta8tdcuejgjzcqxzu4mbafpvcxcjkcczgr8mycc8sdggc' );
define( 'SECURE_AUTH_SALT', 'yozcnebu8xobsfpz0nvcsuh1on1qg2xrckmjgg4b3u61febjtzney3wbgk7jerck' );
define( 'LOGGED_IN_SALT',   'txmajxkfbixi0y9qhukgbhbfgjwezlqikzkwtjwglz0opclnqjwg3ctjyixualtv' );
define( 'NONCE_SALT',       'hh1ipmqz7inxqodr6wr9kwmopvq4whbz071aoadr3udwgkwfypaaqblusewhsuzc' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp9v_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';