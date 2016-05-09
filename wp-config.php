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
define('DB_NAME', 'sslliveq_phpbb');

/** MySQL database username */
define('DB_USER', 'sslliveq_phpbb');

/** MySQL database password */
define('DB_PASSWORD', '@bM!R@Sf34Y@');

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
define('AUTH_KEY',         'z7q|RorBX?S1IaB4Lj>6^Qz7X r9WEUV8XJFVUwHV=a^&2;`{02@-^Q|^-vgi`i0');
define('SECURE_AUTH_KEY',  'fj[M/%%~D04wU;Xo2P+OuDkWFggVARJlJQW._!s3SCs3D(d~ew/e,,c`<:D0@,0$');
define('LOGGED_IN_KEY',    'LKtiYSj>P[@WvDs=/V`Ij:L;j4|6?f4ClwsYk5Svhlo.ZSmZ}TQCX3]<Ha;lVP)D');
define('NONCE_KEY',        '/pVaNF:_I:,EPs.@hpHKAn+95a8E|2-y?yHLHYHi.kF6DG<d?|0x?+q0{qu.27E]');
define('AUTH_SALT',        '~_Ms/n]XV+Yk^ FUA-cWXuQy<8WH%w/JGA_1@a`OvC[nJ+DH,@0d1QmLTn=N`4[n');
define('SECURE_AUTH_SALT', 'kc90Q3O,j.z=6)OcnOV*xMh=)6-]):S||h$u bbY*><IW?o9C6)LL/:YnhV&1;:H');
define('LOGGED_IN_SALT',   '%];&nI^Z[RSU<$D-ewFMgBM=xiM,y8a@S]T[P$Gp#h@5yNnN4U17z0WiY?ZDzv}a');
define('NONCE_SALT',       '/!n3`dsC]~(zq0{Tm0dpw8?Q;1ag*PKvlGC AFqDCtB@bt(;> P8*}eLidnx)R09');

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
