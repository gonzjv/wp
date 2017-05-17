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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '4#fph%uYU>5>`AV^@=/BT}{1Oy#[Ggadw12uPfBI-&0S6,*23H,B7`/3Ls`fR|t)');
define('SECURE_AUTH_KEY',  'm=pv5VS|n,0!=86,zys2s,f|T+YnCC)cB?H-:-03c0,VWpadChsD2O8OvbTn7?Cu');
define('LOGGED_IN_KEY',    '`z^=WI}mGDq/nHlQ)%J$}OwvuFX_>(J3-?m9j/JxCHKZ}M.(|MO(kyuX@yOg}_[t');
define('NONCE_KEY',        '(U?*fB91~r;@w _#8]o_Sp4CGy1}.6S(8PX>6AR.3Z0^W04aZr{a>pI&>)+sVP1-');
define('AUTH_SALT',        'dOckUt-,K=3HmV6CpOr/T7@P<`C1^~H>.-A3Y3z-W~m33Rd.ne6,%l+g)p$)0,QK');
define('SECURE_AUTH_SALT', 'JZo^N 9w6To~ypXtJi5z2nyX,AlqvSM%eowqiP*.3t>v|tXu==9+L_&nNGr.`iMy');
define('LOGGED_IN_SALT',   'r`?y{`u.-8.66t/yDnVNmg!wQA@@.jC*xFa+CYOJ*Y%PC}1}Ig,/efeRH]ACn`k@');
define('NONCE_SALT',       'PqTTqUpf3T{wLI?zCAGQQ5?+6{;wh{W|&(nn9+F]AixC9M5%oDQK!>zS[ Ms 7F/');

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
