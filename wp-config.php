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
define('DB_NAME', 'db128431_md');

/** MySQL database username */
define('DB_USER', 'db128431__root');

/** MySQL database password */
define('DB_PASSWORD', 'sonix100');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s128431.gridserver.com');

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
define('AUTH_KEY',         'B_3T%KA(E{+f@K@u_l2<+p$qb=&)A+Qr_jcH=qV|>P3DMwv4^8op!puG=AhOueX4');
define('SECURE_AUTH_KEY',  '.;|^~@&C+]B,f>+= {_Vu57j(D.[)?&(UO&9>6z+fG _UOU_#M4/tws6j03}!OR;');
define('LOGGED_IN_KEY',    'Wr3pUL?-)h{4F_QI6,WwCGC- .26<>~MIoNnzf3HEWmR*,lCu@t07u4`3BUAeV2a');
define('NONCE_KEY',        '6ptcsqp!8Lg;Zgf$(_2{GWEd4O8`),u1pHE1:zS/{cPu,Lg)(W;(A;J#b^j_*f}H');
define('AUTH_SALT',        '#30QpOt>NCa.aJgEjhk:v|+I~xKc-)U7c~|qm2D*]&Fy/b;5x)33m95lbU}vK?8+');
define('SECURE_AUTH_SALT', '$JL[CwB;FxE9- &Z&Wa+~X*y#(kPeD4oXn=6*[.G@!X> +[J#$^Ij]peGxn`^?^o');
define('LOGGED_IN_SALT',   'D|.=9TQL05?K1@H!Ci,#wzsvN9g-!|+%?x*/<^5U75XD?^UGTZtzD~H->)#R(&+4');
define('NONCE_SALT',       'N$#jm>yJ-MC&R*Ij!|D=7P8$%|NRcU76okAqS0^*Wt!r/FXb 9P|z&gDE_~Rlsq]');

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
