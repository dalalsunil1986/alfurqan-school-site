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
define('DB_NAME', 'alfurqan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'darkage');

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
define('AUTH_KEY',         'Ly{4a-X0-|Uw6-uu$|-Es:H;BV1|}4zHv%HJ_H;y}K{/A~YSn5W&,}WwO/;OtJcR');
define('SECURE_AUTH_KEY',  '[FO>MG{7&c>TyRAAA:Bj%0PRd6Q@H_cXhsPQku&9~u(-WzSa K;%;~8@*W[HW6j:');
define('LOGGED_IN_KEY',    '8.vXeAp($K!+q7q4|n#|9b,]0lP36Kq0mAR b+,?a.4|lCp#7|2o4FbGZq c/oO0');
define('NONCE_KEY',        '@kj-p_[n;<`sCS.;jnIdb7obUOq/IP {q|_! #&%b]g1x$i-YY3oOf:3 nMF~{c?');
define('AUTH_SALT',        'Jo=<=6G$R<[mrcNXv7cKG$mDjm5:{=22Ie7.tFhs{-UAmx,V?,uY5_Y^%mQ+vfuU');
define('SECURE_AUTH_SALT', 'B ]b1Ks+tv(:1yhj;+gBo/([048[-p0CN_|(N?/TgV+m>wYH1a_y3q;eW+rNF{i!');
define('LOGGED_IN_SALT',   'II3=wi{Tl_P-Fh5<SB;+S~_?J}.4r::5L|c))hvMd<w4E%r2y B8AP%SicCg>C3+');
define('NONCE_SALT',       'GX-T6XR3zT}q1XPCj0~][[Q+ZVZ1r^oC)2C7%/3Ct@OE(_JB;fJlNoKVP!<}qs-O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'af_';

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

define('WP_MEMORY_LIMIT', '64M');
define('WP_ALLOW_REPAIR', true);

