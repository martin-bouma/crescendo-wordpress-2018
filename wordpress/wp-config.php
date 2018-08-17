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
define('DB_NAME', 'crescendotest');

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
define('AUTH_KEY',         '):miE!j5u{jP:m)*`],X~@c^+jmxB#`7~DxL5l>//<#>_6*r-?h.zhJDy[Il6hqD');
define('SECURE_AUTH_KEY',  '^~?~%}Lfb7%k[cp}#LQZ9KCJ:#+n~`z;~_qK&iz^N;fO/)kC}Vnd.?0=,7D~xC(j');
define('LOGGED_IN_KEY',    'T}UHNBjPS1Q3byc)6}4/c@p4^VlP_gw}NF*A(Nux*+bAw~9G]4.wC#@/_*y=-^#V');
define('NONCE_KEY',        'Tg)5o|~HXkG-%q*,U26#nJ_sgp5v.*tSIUM2==O{-2ls0Tnpu({`46`pJO:jJ%>N');
define('AUTH_SALT',        '!01Zha0usiK|Bi%h9h$KoBPU3g-PviaI>)|i`3R>iN@7-~@[L9t!6_KLsv<Bx(e]');
define('SECURE_AUTH_SALT', '*zY<*@7VQm}fJ(dSk$B`e,/bExKp=_)dGV[#N!?Z*|kAHxq!<]6/ablVY}hUALo}');
define('LOGGED_IN_SALT',   't,`|@CQA{X-vGl=C1-?kHC+si1^<g5uD5zVj/]U)9n|=t`C8Ugt$x_vKETsRwi4M');
define('NONCE_SALT',       'xg|y$c xGc/+j`aGaIk=5F@vZd]5baS%_!NpA_(|n#&#Wr!oCEnv5wt_+7E#?n?X');

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
