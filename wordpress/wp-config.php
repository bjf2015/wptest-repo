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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'J,/4k-)V4qS)4vN0[B)ng{~NiF)&BZ)uL:ii{f{JH`lWlSCd,v=r;`/*(fcCkNvg');
define('SECURE_AUTH_KEY',  'TX6$Jqksk72:q`y1D>ID2x&Uu_8QE5JT$0NsRg3uV)[6@ }<|>tUE`1=HoPry@BI');
define('LOGGED_IN_KEY',    'iX5q[09ltl5)d?LSO/Uo_}D*cUV_#7M*r[:Uw/{M{xolNVWs1D>(*=ySWoBx{;?,');
define('NONCE_KEY',        'I-sCdV~I10/4zP$C^^W1a4z(vf;R= #43UKhc 1=^DB)lcMJtY~eg%;pCI|]hLb]');
define('AUTH_SALT',        'a}ZePk,~Wu7]:<CJ67!aD!J+8sJ0g1]=x*SQ-obMhq tT?HCCFg`q{4_b%`V%:DZ');
define('SECURE_AUTH_SALT', 'DslkKd/}[9/{;sA1{HWIY8&@W!Nwi[^g>4x0$A67@R!StsK;,Vs9ika4?t@|Pd})');
define('LOGGED_IN_SALT',   'PyjX{|qI]T_B?RCrJP`d~$Vs_m1_+e(^Ij,T3@s|4Ipz_%k7;*7ngS |?5P|vQG`');
define('NONCE_SALT',       'tv>=6JfbqUnJNjILm/coW8X2f`<:``/SB`7I5xvP3yb#H.OY.zMuszDX]2&9u.Qq');

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
