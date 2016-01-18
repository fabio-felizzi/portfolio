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
define('DB_NAME', 'cl58-a-wordp-u0p');

/** MySQL database username */
define('DB_USER', 'cl58-a-wordp-u0p');

/** MySQL database password */
define('DB_PASSWORD', 'K.MkX9rD4');

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
define('AUTH_KEY',         '1AIcuf^/SJjDe-UF3dsIH_q_!7sXOdQbwjQZ7Y2NP_rfwac78l8E38l4xp5#4P56');
define('SECURE_AUTH_KEY',  'YZz3L)Padc7!qkrW^ol34tjVP14_yagtWWQE/7)FvPR2XNyMCLoXz_x6JOTr)Bx+');
define('LOGGED_IN_KEY',    '655eMiA8BME0xv#bXNEB4L64nyL#^RuJJsUoqGge5bOUBtuzGDFWe3iP#Ci__7Hs');
define('NONCE_KEY',        'HWG#o0_xuOFfifVXpHZhSlL#Ed8MleyT-H3Ox2#oX3sfNThdEY!l48)#g9KH83Q2');
define('AUTH_SALT',        'sm=2i-PKiihQ4UKnIed)TcDq6!OjdQ7N=i^=nyXBgf^NW^^^AOQ7W+rQW/zuc+xH');
define('SECURE_AUTH_SALT', 'J)NpW0wy_z7Jexcsozm-5i1ndkAK(msJxG_wHe2TzU3eA-_PBUmsleJg^Qy9Y-87');
define('LOGGED_IN_SALT',   '0U8tv89H(v=)1RK-ZNoMvNDJQvulySc7#SNYNeEM=S1QNFVQhVmpotmWghKLkgsR');
define('NONCE_SALT',       'V3(wi-vCPbYSFBpam0G3K7O_KjHDs#J=)ryy3kPxP6Y71jhVLbJq5AiDf+U-HqG(');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

