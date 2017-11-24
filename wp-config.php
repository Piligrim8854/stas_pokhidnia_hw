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
define('DB_NAME', 'sg2lessons2');

/** MySQL database username */
define('DB_USER', 'sg2lessons2');

/** MySQL database password */
define('DB_PASSWORD', 'l9VGyyQSqe');

/** MySQL hostname */
define('DB_HOST', 'db3.ho.ua');

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
define('AUTH_KEY',         'gQ@+}r^G+]b}6KyI do%O^4$,_--]lxF6xcFFaO;#s6~b|ZAiMci+g#a81*bs:4J');
define('SECURE_AUTH_KEY',  'Q?:C$&rhOrovZ7xi[Y=NkJMKQ&4s@,^KM#_@9Zj/M[HXH*cDKB1{/=x-@9SXA;[e');
define('LOGGED_IN_KEY',    ' W#ck:bV|^fNRt?-r`O9MpN{w/=lT>2I Z,S:|*T|lfK==?}zNDs(bPYni|2!G$T');
define('NONCE_KEY',        'h=-,c+6:1/ZLO?3m|$Zc:Vz2:rrS%+){g}-~W)Zlzi+Te{y!<+(o@[AF&H=9pqRj');
define('AUTH_SALT',        '+I[P=Or X(X/hHMoi6l(s,&9I@LD81arN7yjlCr;`[6AP*xwN@ai+;|Y]h8RM8=r');
define('SECURE_AUTH_SALT', 'u9_,4w|rH*I|]R|*7{uMY9+$A%=UC-A5>+.Ri-9?fL*if%.B2V~p[V@xI[UMHRO6');
define('LOGGED_IN_SALT',   'Ln9/>|=jcEBL{f85+Joc!1v~*,3ODmsv+{|,6(RXd+/WAc{FOoh/BV.hRn>SsfSz');
define('NONCE_SALT',       ');8x#-!f`LbwXW409%r$r+i&3pC =Fy(6AOl+!spgo)_m&+<FB0= ;,w7EI7YUj%');

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
/** Development */
define('SAVEQUERIES', true);
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
