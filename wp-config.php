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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'W=Hpv9X~4cR~Tb:CW/MietVRF_x}_W-S3]d!OBPax,w3_`U#~P-s?{$zN.K?A}b~');
define('SECURE_AUTH_KEY',  '|T+,KkOJ~5M:&^ZEgiH9a0cRTfA+fua_EZw)`*={AF3.O0x;}I3VSf`GSY)eUY8R');
define('LOGGED_IN_KEY',    '|bvSsw]:X0+GJWSBR5EUqQ%gE0$-;jd.7PYq>ss@Nm[jYr^9Y4~t5ckgp4R]{88J');
define('NONCE_KEY',        '$jC=B99WSmkRp(`X(EY~h&!ealcIm8n&B+Mj|jc}T?a~A%Y|S5YGg2Yfw2T:-3q[');
define('AUTH_SALT',        'd/zd+z^I:%OJ:;E/+/B0l1R*gnwPqe},Qq.-G|/uUd(e}<:n4R]5k@ RTQXn!JNR');
define('SECURE_AUTH_SALT', 'U4H=,K*gAt<[Upd%xA]k<KLE5JO2}]3N)0$+!bZLxz8H=VU[7,U#r[D&NJ.1KC1T');
define('LOGGED_IN_SALT',   ']qi-Xk]wj{1+^P]ua8Gt+4R5(g8ZP]5c_j|yVqO*RH*<{!Tz/kc *YDv_|h]`]aJ');
define('NONCE_SALT',       'Kv:+RMVMJj{YpsK^?TnRAm%G `P@n#eO8L-)fX(E4;EfE.l~-O8ol^R(3e@,P#_+');

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
