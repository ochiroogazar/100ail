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
define('DB_NAME', 'buildup');

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
define('AUTH_KEY',         's%BP`6X~Ri ]8$,-|a(b/4/=g(.^2c:<K6w7u;e^dpFKRD|Jf~mLn^qx9;hp1W{/');
define('SECURE_AUTH_KEY',  '}l9_59%tLCeEEzacS*vtA/fVtH$t?e fmnu|tI~,IgpW@#thxHl!yF7L!9[I9h:6');
define('LOGGED_IN_KEY',    ')Hzm* 8hjogZ(~&o0Lx3j@|7:{KH?@|Qege0U>Oj%#Ih3tR#.Y?X/^^P{obZr +~');
define('NONCE_KEY',        't V%s?#OSl/_:*l/=WC@3$nd5+UZ$=y)@mY*cD84j$oR-K*( hrP5OoaUM%hcnwR');
define('AUTH_SALT',        'tJ#nWzQUTULX23HXR9LYzFC&#tBt{*1v&6g:/<J]64fv*g@CbAn4[hU]`j~+Vxg5');
define('SECURE_AUTH_SALT', 'gEf%7H8@&BKf4 6L8H/L^m!(Mg0p?2(j[!2FRv3K6^A1e# *s*:KTZR io7!V5u&');
define('LOGGED_IN_SALT',   'D-{F=6q(&a?0<T|dA5($@-B!V@Doa4B!Vh[NMUy1>FwIo`xjUf)n;qmr3G1l5Dz8');
define('NONCE_SALT',       'D#*7ZR]/{;o1N@TPPQe,Q2Ew</F;:)XZa:,OOBwuDv>xkuw{tV#cIBFp#|oX#T;j');

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
