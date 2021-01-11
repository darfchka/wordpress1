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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' #x*(FT%v@$X6sU _MEr[zSb7>l7CRTc6oISr<x?[<aUkR@DqoLeQw}$n3#1pMuq' );
define( 'SECURE_AUTH_KEY',  '$kZ[;_A<%^(Lu$MdkXv%O#+K$)Yciv8 GtSxeqvg4y$:Di?%t9M+a/L#&WC&dU:b' );
define( 'LOGGED_IN_KEY',    'ZZnOlvoYyIvKv6~`-e9(%]o)*f<DA&mMKHH2t%KYQA(Hzj>PMyi`z^)5T/1rd]LW' );
define( 'NONCE_KEY',        'xHs?0c(.g~okM9u($[ntLAcFB0#H{XJ=&t4k6|}g{9YbD)tDJeZktXK23-Z|arc`' );
define( 'AUTH_SALT',        '?,FRgA^;yvm2MfOztP)x+^@Bp`J@v_pV>NtO!L@|ofo!{2C@O*Y{M][ysL@|WoE2' );
define( 'SECURE_AUTH_SALT', '%Ez32<C*=,Rqj%UtzSCc)G#}c0-NI~tAi#]_lF, M({;$$q@iXV9[y==&.3lz%1r' );
define( 'LOGGED_IN_SALT',   ';N%Ud66H3N%KnNY:hp8zGuCn_VSm+`(;2EB0}QZ.8D@:&hf:*jB@eIJ/>w80YPF]' );
define( 'NONCE_SALT',       ' bb]G^!HDW!F?iMf?kCrZ<Ks}[35L{Y]U6oqD*:}>6nLA YnnVAg0rme_o<u>?Ij' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
