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
define('DB_NAME', 'art_of_attracting');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9c)S*~V@)N-3-`2#E$JRx!eOg}R-.LW(W[q<86>:#m^xxN$HMFXjxF+A7&I!NGvi');
define('SECURE_AUTH_KEY',  'O{>T~pgKk%BR_%7h||+~gwI6]xw,j#_/=Kth;SW;2f+0dN/X?ihve&i{sk51B8]@');
define('LOGGED_IN_KEY',    'RtJw*Ov;wxxjoayN%+#Uxf ||.}trrj] w|6.Z2u,O9mKg{`(q?LpI<~a_vwhqPD');
define('NONCE_KEY',        'hG+y@t3<xqkX./:@KhkRvT(.XJ$6,6?}[.S6`6*qZ[]3k-|qsGXGIr,lO*_hwbNe');
define('AUTH_SALT',        'Nq,RdV}WQzw}@rVYK0qO_2`Apq#v7:|_~{{.7m-3t`1cTnG6r Q&lm~NV)}KMGPz');
define('SECURE_AUTH_SALT', 'f6D}1MMw%2@S7%MwB)cZK3vD$+jo8ut0s$;5W~PaE)ZYj*t#L.@`gu3nZIEjMB.U');
define('LOGGED_IN_SALT',   '6YYF.bS^O7I7t<J B9*JT_+LoT`z@0mcsn${xjDMP9L[b0!Gbu#P@vdkR5Q,-p@j');
define('NONCE_SALT',       '4]o2zqxH~NHjiTguj1k@a&xt4a8& b/@9$!)*N$b#i&$.R=8a}tyEt4XuimlM|iN');

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
