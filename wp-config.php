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
define('DB_NAME', 'wp_steven');

/** MySQL database username */
define('DB_USER', 'wp_steven');

/** MySQL database password */
define('DB_PASSWORD', '1Mar2S3445');

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
define('AUTH_KEY',         '!x{L$IU9S*Po/$-G-sa[+ma2wP<nED:nEJrON+6zSNcIUA$?$DN8JR`1sEq<Q{_(');
define('SECURE_AUTH_KEY',  'QNZvd@#1<+`%=T0r;,v`/m;Zk1r-&]sR|r.zNc F]-+9Z6}/YZY(B5bMm-LFAi8W');
define('LOGGED_IN_KEY',    'YdFVDx[M@siaF#5E}CYvE3)F)3qMD?Xs]8}%-SZJzN%Q#qj0lpXS1MN.X|u6o#Tg');
define('NONCE_KEY',        'f^_^=&oMwf4W:$1yP/T]ayU*<[TBgrUZn&/6/>t+fMa(w=&l};NJ5d#!)y,[WM1k');
define('AUTH_SALT',        ':A${6Ld-~x>t~3gO+(M_2>]+;_4+#m3vagfX821J=AB&i,H|<>%,@=6)U!~|m4np');
define('SECURE_AUTH_SALT', '@EShpM&_bLOBX_swJ%DAa25,dfjYF>|Q+`(f|)fLwIonKb)s`>|d|r{pTrZA+HDI');
define('LOGGED_IN_SALT',   '-U=$ZlT|Tbb6g}}^n wy(q*2wv5|W?h4|T$#-A|L~#>i1rrU=p[9[Qc|t^Q5.I@<');
define('NONCE_SALT',       'W$4GoR%a=Hxn-~y!`L;*apy|-T1Y-gF4VR~x;fS44?`fQSan4:QMlOL2hdj^SWVl');

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
