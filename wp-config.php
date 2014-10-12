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
define('DB_NAME', 'openvani');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'a');

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
define('AUTH_KEY',         'wpb>i]iZ $9b`C41t%raU9B8UAB%^UhdV?/(m?/|++q~82aAL$IppJt;.8a$9:}&');
define('SECURE_AUTH_KEY',  'a.uCr!SGAA4)m#;1,`q>DG|{4)q)eN ;A8poW,(vm)]sxIk:YyBp3w-A`I%$m uD');
define('LOGGED_IN_KEY',    'h9)ZIdwZa]_@G-gvZ>]#JPeW|_SiFd0u:|zA>&.9!Oz{Z^U+C#Dk>/go*~ZuWsDk');
define('NONCE_KEY',        '5t37?hbS|Fym:Zl~X7l-FT!U-n#Dn4=}-$ kjo.s5zD;hVRAk@Z^3*0!XPsyf#=,');
define('AUTH_SALT',        'Cpdo[=`#V#@Fa)P]}0TyAt]xx-=Q%:-$~O94~>_G`il)+6OrP`#VH&2{Z||`sDa_');
define('SECURE_AUTH_SALT', 'jhh(rLp7z!5A=gwF`g|C+Hv|#`Bz-4Hs>91U3ziD%X&@h3e/9 #L$W6LAt+nDx-S');
define('LOGGED_IN_SALT',   '-~O0TC40(E|Z#W4t;V[[1Wk]BkL)G`]^enu#X3gRZ^uS7p_- |,=!)b4*jtXa8[k');
define('NONCE_SALT',       '|+pbV3l-xeR.AIWt-o{IxRlL_p0:{d9](UM!04Do4r[pQoz9sZ(^BCHJTS!dC|^d');

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

