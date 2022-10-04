<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+PfL+0_{I|qlaj FZ7I3L&[sw%siPj,!H_obI-w!eBDpd@Y/SB1+W8d%A0gQ]%7 ');
define('SECURE_AUTH_KEY',  'Zv,_%ZsZ}*{flulU?!=7uOx6Gw:EW>`sNrL{rL)|e-k}6xV-|!pUFA+1y|Scj-e2');
define('LOGGED_IN_KEY',    'hX)fm2lzsh;pM&&THbJza2!-|0hc +ob-O^dlwvRm+)usd!(AHNK`$/b|jh]KWTO');
define('NONCE_KEY',        '|-xa`vks0sUss&>WV]fkS^7h%|g.]56X lU^SUo/|O!ooh_6}5xP$27Wz)UlQbCM');
define('AUTH_SALT',        '6%iT@;Z:vX5`=h{.H4eTVBv`|jVCJ12M6+Uk!cH`D0NLx|-`di&j3NV)N2??-}[<');
define('SECURE_AUTH_SALT', 'HU9m#=8^1j1YjS!F+i++ls&fyAZN+7/.b|3HWoeXU.L-q%!6UEM,},)%EF;4z@DN');
define('LOGGED_IN_SALT',   '+}uK]iob&3`yg!+=Wdm!T?>J{-ET%m6Vt<-;;$R=s,!MdOr(,!BY]J%WnjTNsK:|');
define('NONCE_SALT',       '~|r-7Qfqh`>.2dpH1<>}K-0hQl=|Bt+uY{ FrG1Q=D$n~3%b0Iv~dY*hU|%J[(}:');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
