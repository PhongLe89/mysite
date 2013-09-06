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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '2(XU/uY:>6|hb F! &FFWe|767Y+bkYoVp%[,wM_/a7nQ[y%^MF6NVm#LG3BEipT');
define('SECURE_AUTH_KEY',  '_ojU@dPA3.QW_|{:e|33plGZODBp=7pGO}4U$zunXR~f)o]3A9Fr.!#F9$bKA[<Y');
define('LOGGED_IN_KEY',    'Om:|laMwWnr3+;W8zl??9&YgGH`@hin<=UQ_az<wsh1k)ChpYJHwX[&+R; mBqFo');
define('NONCE_KEY',        'W;XXpUO_E4-[Di$*=%)=MLgkE!=N3[nZAiW|&T?OCd|LA-EJ-~0=8$|qI*<7|eT|');
define('AUTH_SALT',        '}b@vD~P>>ZK+$-Gm||SGHM?f<isAc#|m,Y&<-J`}}|=kiuY|jLyVf{iNDxTm*PO_');
define('SECURE_AUTH_SALT', 'r YQ)HZ?Gwb>m63_oc)qI#O/Ply82qs.pN|q]$-;%(2|L|kNKRj*-Iq[rXbsJ!w-');
define('LOGGED_IN_SALT',   'b-M_xXL8`Yl_+{zNzp!&nD|_%[f*K@Gj1w7(dpDfjbvz.6qVd2V+#4kr5HaWty7<');
define('NONCE_SALT',       ']yDVBzvf@jcQGJ6cZS+,6<x+1a7qR$&t1hSIm8|>-gqzX*1^~RMya!et_-R|?=TR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
