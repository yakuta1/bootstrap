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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'yakuta1');

/** MySQL database password */
define('DB_PASSWORD', 'yakuta11');

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
define('AUTH_KEY',         '~ZiJ15|6Af8Ar%C{H1gga-d6pk+ 5mm[%J-,9rvH&z2BPuOKh!.5|xwEF:ezpONQ');
define('SECURE_AUTH_KEY',  'u;gVdQ#@,;aijy|aF,9AI{8i$$j=V|:IsbLF)0?z.Upxdd|z~JE@kv8:`oUIHQ>h');
define('LOGGED_IN_KEY',    '|(zcSjpw:wPGXn~PD9zm-F*!d6&Jz;AfZq;BbL=?8---jp }[/@zhnA-J}Oue|$k');
define('NONCE_KEY',        'lx|b@reSO8fF6^;PiZv&mop|F<Uf/L7V1uy!inkd|GpR:D?LQkcVP&-|`W$y  bc');
define('AUTH_SALT',        ':Ft 11 V+2$xUv]5)-LZR:=8f,XHmyb/ys8-9QrVv=bNo(ON_u+}-ADvQ+3t(egZ');
define('SECURE_AUTH_SALT', '9Y:NA9|YGD-DLL]jO2q3U.:9pIUb,-Xci!5tt934S]-wxoSF(2-?8d9?-Dj0q%EO');
define('LOGGED_IN_SALT',   '(Dl,#lx)JrfS-AVmOGh)[LHl+zIxbxIuT,IbA8I6e]:!wuZ10rXruzUX9-c]<P]/');
define('NONCE_SALT',       'MP,VPDdpcHw rs<ARib8]Vq#[`6|c  ufKWFOhWz#-{V39+NR>q=/a,9J}k7&u]j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_botstrap';

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
