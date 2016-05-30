<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ambido');

/** MySQL database username */
define('DB_USER', 'ambido');

/** MySQL database password */
define('DB_PASSWORD', 'norcaD416!');

/** MySQL hostname */
define('DB_HOST', 'ambido.db.11896704.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'lCA;4z`%KmpVBEVDXtqDm6z9Y++@][VR^#D%8hUyuLOG)6TT.*BT9SAW7V}gx.)L');
define('SECURE_AUTH_KEY',  '+Ilo>$[[gMC~&7z@Rr+UOJSN ZL04 s25-Q@D)yhjQx|_n^|/0i3;^=Q++Lf{Q#_');
define('LOGGED_IN_KEY',    '-%(etXYt]1_<`:e[w+++fxh5;`!=Q-7@zvE*`:tSXikc!.F1Cn%,e<yr0Jp[Tvj|');
define('NONCE_KEY',        ']mOp4[k0XCL MaS&esd2Vo+]d@)gl:?|]+48+Zs&gWwd~w&XVvwhL# LFFc2 -4}');
define('AUTH_SALT',        'h*,Y]_hz-eTiWSl?Kw;S*N~5o(q?(vx:9r7uTD-uov!%+Y8-U!|$]s.a6k#ecP_i');
define('SECURE_AUTH_SALT', 'R4o%lFQ=)>K~+K+bg#w70U[jijT5*O7B$*Lt,)6mGYU} +u,j-F6}6r0ahm=w#?d');
define('LOGGED_IN_SALT',   'hU?U3;&S1X/OgAwmQ%$sD?b:rWJepu!ZUA%MP/w0=ye| KYSo]tEYb]+ACO,3Kw}');
define('NONCE_SALT',       '[Y;e-`iH2#SlpDFd^:#N#734gn8t&k,_pDAE>yWqso6-GPOU4:hqzq9o#+B2P%V~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
