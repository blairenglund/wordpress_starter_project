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
define('DB_NAME', 'wordpress_starter_project');

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
define('AUTH_KEY',         'riMF2}$c(>Ze-91iaXiJ+(?Fe6r}HZbPoREWGTHgf#LtgRbM`nT/t5O4=CbbPnMx');
define('SECURE_AUTH_KEY',  '#kJ5O/T?#KH4O=pHrf+RqOyae2yqL8Za! Z3J]Z%<m,W!iz=$EvT3(7fKusrr>JC');
define('LOGGED_IN_KEY',    'oj9&Hejq/0:|sw:E7jO[%Sno!iu,`7LWh<w]|me0^c_cX2jJVft3 4D{UP}Jn}tf');
define('NONCE_KEY',        '&ysJCkqX[~avuq,%C:Vw}5MgUVYk/&p1m9gfed+JML+v8ogTNP-1sjFrc@;8~*bN');
define('AUTH_SALT',        '>F%dYTp@Gs4V*r|;3H8Oz+u))44^.&v(,zCtx-aWnZ!EoHqSI4uFj4MW+94ad y6');
define('SECURE_AUTH_SALT', '^4d+*:p0: Z9=jXiZV<Aohu1k|{3FJnT^>Z%<a%BdPv^aYkG:RS`9#1a/G={>w|@');
define('LOGGED_IN_SALT',   'PPA1Zk|1#!bc@0E*-w6p}@G&,vu(Sma$+5s{fN~ar{aNU-Y|K&,3C4epyRs:>sR6');
define('NONCE_SALT',       'jQ~[C`a?9WrSU(bxX$G`8=6H$yKwEs}|*~F=I4ECh0}KbU7iacWimW7*pYY[4Nx8');

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
