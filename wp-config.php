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
define('DB_NAME', 'bellemichelle');

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
define('AUTH_KEY',         '%HUQ*KXtDSWPP/pmA!+F#sk|cv<42~<|$(?k;tEcaIb5V 7l9E#l=KMA}rZ?_*G3');
define('SECURE_AUTH_KEY',  'TXrE=z3@m/$2-UTy;aSZi0[DkGS:f<=B)X/G5zAxkVv?1 NMqns(uqR}Ii-KI{I+');
define('LOGGED_IN_KEY',    '`*Fz=0g*n$9-C1?3iSf]B3ar_Zm_U-Y`>NhnqD^%6Cdh<e[+CN5.|]l#73-1q6-.');
define('NONCE_KEY',        '%,</OLGquL-)E4m;N5_yHG=n|;<?{o0Mr1xJzD|L`uH-V]^|+s<I@J{$i|PyGHA{');
define('AUTH_SALT',        'H>&HzF9VSfh2-}C`G7^_)}>xGtUX_lOIM-S[jZB#,DY~xkr0t06GAtQ<pBkcUdE-');
define('SECURE_AUTH_SALT', 'V>|!{Ku]hbNa>NsHec[=94iZ+9E@GUH^-e;z~44U_{H#CLJ7wjhywd%^xmwZBnS=');
define('LOGGED_IN_SALT',   '0nkA~w;f}7*IZ1=GtVKv<i;P,bJHUt3 {jF7#x%@x*Ikf2*7-OesOv3fH-4I`[|]');
define('NONCE_SALT',       '_#yI|OG.=HG?&+V-Pgd0t9Si48NN?6sOMZXhKdhHoOFr}V?0E7(@M)Tyx`|Afua^');

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
