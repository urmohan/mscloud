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
define( 'DB_NAME', 'mohan_wp_rkoiq' );

/** MySQL database username */
define( 'DB_USER', 'mohan_wp_huzec' );

/** MySQL database password */
define( 'DB_PASSWORD', 'K80OYUe~kF?xY8tX' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '%Ly5Fw!ia5~sd0hJ+oBo9;@4!*e)9+7|JB]@VwSsI_41-M~iNa7+8pIZF0-u%9]!');
define('SECURE_AUTH_KEY', 'z8+:L7;O](CH4;1M!8!@WQ]IE2r0Z1C1f1w7mxZWBGt);OqET1RM8nuU%Kt@0V%r');
define('LOGGED_IN_KEY', '*2d1+8)2Zt1WG7OdqyJ~C_jVjyHX6gV7M/]I05pky1YjLd4lqS5P4mjuP2:|ovd1');
define('NONCE_KEY', '~-01i7%RJWgLell@(]9k7+jP*:#88KP~hOWo0-F~9C-_P61M-DA3[BT(!&LJuH8l');
define('AUTH_SALT', '7u00K96[4Xp0*h6v&[a8#@d8!RxF9Ge:fs47-OzMp46Gcl(S0as[cm~847~@[@a#');
define('SECURE_AUTH_SALT', 'ac2JTJS]-4Eg@Bhi)5@79;&M6wzrFF1zt&KVLa#1n(2p[@*2vj3tDXX|G9*;g8L-');
define('LOGGED_IN_SALT', '%U498oo6KeoXdH6y0jIZ1b%Ki(B33Ag38b27v[REt7EMS67ZteL;)k)e1FP9&1hE');
define('NONCE_SALT', '4K#A-V1S0Nev9%e2K-18phH5w]8bGMK3xi1JUxR761jOm4zFdl2~cf#H]x6:z#_d');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yXK2w_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
