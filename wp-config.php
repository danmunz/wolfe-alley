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
define('AUTH_KEY',         '>$xYnj*QT}V|V{AyVf)*-c0y,075L-J`,M,@t4<{GS2eW.I)B7|Vjj]x)8u-E3MQ');
define('SECURE_AUTH_KEY',  '*s,]=0qW12Z(m>{j5m8t|(=,S>O(8jv&Ah  MlNTNV2%b=UuU4_]PxmHwgId+Z{#');
define('LOGGED_IN_KEY',    'xc(^JP6Yg2=(}a{J0`r,^HyGdsy|p-s~. 1.{6j-jy{OS^_Cd F&.+sxmGlZJ.04');
define('NONCE_KEY',        'C>J4T&~K;f@|_R;R((~:~bw/jHMR%tpLM-C54rR]12.x4<V5V&psk@@8J*,LHI./');
define('AUTH_SALT',        '%2A)qpCJJ.k-~FO+!+-}oEd]L<<Xt>IQ$y+F,`dOfTj~Z}o1wlC0TK?fMI)A5W$l');
define('SECURE_AUTH_SALT', 'p.sK|P{E(P!V(RB)0`5}YU.HT~Gei7>tue+aS%bij}M5q&~qgtwH/.yt-~go@b+e');
define('LOGGED_IN_SALT',   '6WSDWw9%Hakb9l(Iu.uR&go p!4+wd-3LE<2~(FWMa~aF$[F.(J:/m|hHA4UiLM ');
define('NONCE_SALT',       '`Hi+@|,aq6giLXLRgd%maVbvOMARTL.%^D~AH|g_SL8|In./yKDzU(hrq _#7gM]');

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
