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
define( 'DB_NAME', 'labb1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'x^}.%hRZ/7>U+M}KG2u7oi/ef&[{~0ao36<jlPQbX^O24(QR? r3GbUGC*R;wob%' );
define( 'SECURE_AUTH_KEY',  'lLRJX;}rR b|,?<yRyU%y8B8szRD(.3A9[I%_ lmHQdpyS@#-L`W@hq.,[~HHn6&' );
define( 'LOGGED_IN_KEY',    '@mfW73?16*H&4[)qM^kz<>pqZeV</Z_(%,Z=0YU4enIjr-P4q:H{Ew{|]jvkx<lK' );
define( 'NONCE_KEY',        '7Bt2=vt8O{t2|7TJF1/jN?cI?;8*>eH?F}V]BV-vscwON1PNxZy~tD1>_uhFAcq&' );
define( 'AUTH_SALT',        '9KV,n|qE0h_@Rg}zk.f}|8/6VSa.xtL2<Q`>S#4l*O3I{T_Bv>w!*[aK5/n;Kqx1' );
define( 'SECURE_AUTH_SALT', ')rYnM=$EbY]SLt&7&^)bD:9&3=?>z(boA5z//LMA_tOu[16|Lka2R$iD-X)%J`?v' );
define( 'LOGGED_IN_SALT',   '`d{>e!XQ=POay@_sCLe8>`}.bP.gczC`7FbED9M_:n(0b,N~.P71TH%VQH6C) V:' );
define( 'NONCE_SALT',       'POiRii+mgJsIABBm/IkUu560S=OAyBcC c2&hn<(tQr69wC]uz{{Hd$Ssb[Bwzoa' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
