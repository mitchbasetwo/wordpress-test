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
define('DB_NAME', 'TEST_mitch');

/** MySQL database username */
define('DB_USER', 'mitch');

/** MySQL database password */
define('DB_PASSWORD', 'M1-7-c4');

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
define('AUTH_KEY',         ',IUd3]e4hb)BsV+LZJP7#u?*MP^!4=jd&B9,n/sIN1VQzOePi;&{cG} $YAn<^2f');
define('SECURE_AUTH_KEY',  ',?hslBd$#kfK9|~bc`TWv.kIsDxP45kqh1yaH2Q0k8/{d3ea|uV8N|*4}D|gBA)}');
define('LOGGED_IN_KEY',    'jO9$+Nb:Y.l4.UhV90;W2F_b)~R[?LBy`5NC&$:7$Tv1J+I3EX}3%XP!nao$}C18');
define('NONCE_KEY',        '#tPn;kUp;[;R6(bav0Box%|A?2Q5VhAfq@p-gKE.B?-u_B|/^Nx]gB}K5)YeMc|K');
define('AUTH_SALT',        'CZ#$dhBDwswDX;=saH#(1iA!q@4]z&*daSd;9YDHP_Ro$}IYHrV]gY /b*M|x9D9');
define('SECURE_AUTH_SALT', '-#)*{v WXn[rFh&TBj_ Qa5.|Q?>^N?1/$|9iE&KaF=I@*3A%Y+JPC^qvh0.2T7L');
define('LOGGED_IN_SALT',   'ui[!T_j7A;wMe|loz(f3<^j#Y1PGn$<a[62;wB1+mZq+*lBgLjw(vFBfs^@(1-N(');
define('NONCE_SALT',       '}U2>}X++8yM*4g8 H?<q||2|_.T$+.6(8dfc&/AZ,qQ?j=e<9&;,.|YHiid{|=X`');

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
