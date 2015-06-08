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
define('DB_NAME', 'Essential_Oil_Life');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>X0.)|oo-Qb|`rPWE|a*Wc-TpUD?k]CUr-n3XOa. 2p1&|FnMmypO6?dcv/0u[U]');
define('SECURE_AUTH_KEY',  ') &GaRm^^V/O1M8_r9zYwoQ*Td{aL +hBZ0i11>7Hwk3x~;DTJ!2Q?KHIn+::gQ|');
define('LOGGED_IN_KEY',    '/:=yG5gr$--!W2fULH+$v_w]SAbM&jUe*lx%S)wj2hF7-kx)fLD$DxvR@uLXa {>');
define('NONCE_KEY',        '@i{.be)Tk?q-T_LwC$CHQM^6<(E~9:Z0r-ecATeMWki?B_JKn-z?95.KXckY9k{{');
define('AUTH_SALT',        'wFw%}:q?IGg)ctFzFso{}CB}?+Crr^^]xIuBNO/cmquF#K)wRZW%CF3rhv;[z>~U');
define('SECURE_AUTH_SALT', 'hdad:k7%y[p%;mr$nft&;6{StF3s^.xPiQ,bO&VZE@aoP+TX~-xzWx~TQ+Ch;JFy');
define('LOGGED_IN_SALT',   '+vpMa6m937lJ0a<|AGELY8m~g=QP<-(Y)S+QZe4]=gE#en PO/;CFg=14 ([p@P6');
define('NONCE_SALT',       'r$6 (X>K|fV#/CL2oD3||pe-:*iN2gq{V%.`^qkob9W5D2d/p>adY@9qTnD~%(d2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
