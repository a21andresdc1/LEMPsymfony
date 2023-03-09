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
define( 'DB_NAME', 'presta' );

/** Database username */
define( 'DB_USER', 'prestauser' );

/** Database password */
define( 'DB_PASSWORD', 'prestapw' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'IFI4ka[gOD%U(]nwL-rD<`{%sP+g#;vM6#]Fhs4:Su&U-yt)Fdl+kJcYM)_ELz;L' );
define( 'SECURE_AUTH_KEY',  ']3F0C6a[0@3 mff2Wi]0oucQC5aaRm~1}>i`lBH#&J!/w8~{ZAWl4vp35,rpT(*c' );
define( 'LOGGED_IN_KEY',    ' vL?@owySJNFw_7#[F{B|x#((GX6#9+ .o2LhBX[?4dV8 kf?u$SL*qG&pm e9tG' );
define( 'NONCE_KEY',        'nWM}X4L0evM;n?_1Ey/HS#J>ZE k]|-u8PoyT5)i`OGa3@iG3$S]hc0rQZo!fEuc' );
define( 'AUTH_SALT',        'M[5GZQOCM6*a~!kNjpicioJSa2f8g93uK^^s_*vz~nTsJ>qEvwrp-{Rtt)s^/4lI' );
define( 'SECURE_AUTH_SALT', 'If6Aps?|3zj@w]~Cl+]IAa$`x/*5kYjR~Hpg<1>mJ5Mo9wj6ipJS{7i8 `^T&Fh!' );
define( 'LOGGED_IN_SALT',   'z!n=zWGCPzy^;wO&Y1t.@3z41 koSUXy)SBi1t[B<Se.IUfVCB&gm.M^l;tXy`&[' );
define( 'NONCE_SALT',       '|dYZ&EjIQSbt;okQpNm/pep?wge/Y1PkyeM*{qR|I -Bgw1aH<(eab1)1lproRA?' );

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
