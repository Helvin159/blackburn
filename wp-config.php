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
if(strstr($_SERVER['SERVER_NAME'], 'modelportfolio.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else{
	define( 'DB_NAME', 'nblackburn' );
	define( 'DB_USER', 'helvin' );
	define( 'DB_PASSWORD', 'dora0411' );
	define( 'DB_HOST', 'localhost' );
}

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
define('AUTH_KEY',         'i0xj2nwiQUyTQo4I2dNkDOz7ET7QRLBZTT2j+tvQvSzGInxZj/m3P5u5AJbwsjBUGdDbccPP8hVUTDKANV/1Og==');
define('SECURE_AUTH_KEY',  'oUfuL6t8ajc8tUs0DJgWxtsfuoasI7MxpM0EWtd39/kDlN5dObZwsAgIwUvKKor5YFrV75Waa1k9R90xDdumHQ==');
define('LOGGED_IN_KEY',    '2UAmyVFFGeBbyAG3epRS7S0QzO8LLxGVzACUsd5S5vZc6redq2NwPXDSHbdYlLW80N2BS++vw64202lqqurDew==');
define('NONCE_KEY',        'jM2qJWMnRafWkr3UAmLi7hyrGrYXCdjr+vo4AzIxBYMwVGu835wuz2SQaCgdNz+2yv2GSj/Qr1xcUNdws5r8Ow==');
define('AUTH_SALT',        '83G5mF6fxrsfa3s56zjOLT24QoSU/HAhS48cCqusDRYqAjM2ypBufeTy1bSMa8gBRw55s4UXP00h83eG4ioLtw==');
define('SECURE_AUTH_SALT', 'uz+G91SMFzz9t00ppoS1HT2P5Q9HizYyPwlczrW/U8Q/PYqBNRDSHjoIMarotZL/+m3/yFyKSs+FpJOzd2TPqg==');
define('LOGGED_IN_SALT',   'Zw6VAfrnt/DDC+3gGnppwWCbBYHKjQBd2STuyRDohnb+gDhg0pBjkAn5ZtT869YtsETI03TtNUpMTMSTIxRugw==');
define('NONCE_SALT',       'RKSRkrSYamu9Q0KDqqfdAOXBRy0HgayWpJJWeIEqU3u785+xi+gsHigpui91i131+fH0bRNKOHdzNWjAag0Bug==');

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
