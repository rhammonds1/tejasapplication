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
define('DB_NAME', 'DB_2238_tejas');

/** MySQL database username */
define('DB_USER', 'DB_2238_tejas_user');

/** MySQL database password */
define('DB_PASSWORD', 'password1');

/** MySQL hostname */
define('DB_HOST', 's02.everleap.com');

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
define('AUTH_KEY',         'uYmof%G Rs3R0vWuVK+>ijVcg>c.|y!K(9=:oX/B&!$MlmBN%4^]7eIzY~Kg6,Ig');
define('SECURE_AUTH_KEY',  '57Xmd8!Tlq3DHLWSzBfoRw=,mIh=afiT[[miY/6mwsLKmg<* JuOny&M] (zf29G');
define('LOGGED_IN_KEY',    '[}3x<b-G3ygQB.G&-L}M{[ |+Om&rJ[0o6R +0x8i |HxF@1_`W%NZcf:4Z[@=AK');
define('NONCE_KEY',        ',6bf(]IZsdV,nsVtTObK(9WA~v.F[F-MduW+j=yP>,m)}4W|E)6Dw!R*GhsFr*v[');
define('AUTH_SALT',        '%W wNY%}%5gM?Iz#Ah]in$+TyG^?5s%VHk( =H><]<|?|;q8OW/:8$t12l`NHzi2');
define('SECURE_AUTH_SALT', ';k+Th48!#]kk5W-.pk)Ml.GummPtr|Yjy)dY!%`hlIV2+.7FG-*E`=SWhUl_,VxZ');
define('LOGGED_IN_SALT',   'wmkAA[rIjn0Wmctm d!?~`l9?Dxk{ji32+H> 6d;f*Q4lf@3,Q/RZ|^R/+nc_@?+');
define('NONCE_SALT',       '{._*/moG`fLv.)~myc g0@)kh1ovG~A]+o dz~d #,/}kuIDHXd*v6}e}^9.zkEM');

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
