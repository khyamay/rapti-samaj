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
define('DB_NAME', 'iamkhemc_rapti');

/** MySQL database username */
define('DB_USER', 'iamkhemc');

/** MySQL database password */
define('DB_PASSWORD', 'chum@Devi318');

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
define('AUTH_KEY',         '1I=u2zf}bS+p>1~le8jR*]8)6$G]1OY3|/M=Y47$/3#K]zqC!}dJ-JkP|j|%|Q-O');
define('SECURE_AUTH_KEY',  '{.j7wZ/TL|kSu&Nj|ssOGt}3w+Hxr&/AzpmL?|.NRS~ucsi#%fUBbj^S:$EO%C4K');
define('LOGGED_IN_KEY',    '[iA=@X^MJi`-+ r%`R?W(WnwbJmmvWG/t+mb|X)DWX.]`nm[Wv^8>|g%JLAe:[-^');
define('NONCE_KEY',        'b4BxnYc9Mt@Q}}@0}YU<(^l|V|80G//1|p`$)>:5!}?4<pFLNX4&26#_#C}X6fdi');
define('AUTH_SALT',        '$#?WN|!!1nZ-ooJdB-f}|(TNkb;w.Cm9fM>-q~f3P_uj=nA )mw=-oA;Tw=dngH ');
define('SECURE_AUTH_SALT', '+nK+eejcOh1;k+8bvFlOiy6c`DXjFL:-@_i4S@-bCt1TkwSWz_J(}Zg+chW[{VzV');
define('LOGGED_IN_SALT',   'G&p6YBc}:Sc--4l[_rqms}|,G70nG|C-uG@1dXBML})r4XfPvTvK-iN{@0xPI|S.');
define('NONCE_SALT',       'SU$)G$zCe;t>{`5i^3zA7;bOxMpg*s,wiXz2L(}[/oAD]=h95f#xLnI2:$f/]Km,');

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
