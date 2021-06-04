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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[ajYOxzqd<20Hob.+i#1N*XYj^/WX2cJ4pVG>;pAyfG uD1jz,>=|?Ko.9k_8eQn' );
define( 'SECURE_AUTH_KEY',  '4M}`InQv)BG5WFtw&3!Gpw3~fBY)iLuetT;hl;&9nw!mlFuRe:G}Mor7u!&pui}M' );
define( 'LOGGED_IN_KEY',    '%m=0Ae[Bze#*p7[!lG>1Ga}n+8#SB$,n&WGd#(L<a8<!o7wh]-7]6]Nl2DUY:byV' );
define( 'NONCE_KEY',        'UNWh3Gs%Feuw/FB$dVCKilo!s:=/]Rnr4bTGr-6yx{;f*T%43LX{B]-Z:PH]1v$o' );
define( 'AUTH_SALT',        'F Q@)DDtXZwem{[:4W!-AQ2cD)nq@f3P([(O-8h*[z57hltC8F#K8+~Fw|C}~(5X' );
define( 'SECURE_AUTH_SALT', 's?eBD!jRHCot~}Y()bW,lbcek1=P[D(>mhbn@%q_*@bO mbh6|j$:0e**y!O{T/5' );
define( 'LOGGED_IN_SALT',   '$XUYEH0U-YrT:?@LR}Dmb996EmD*2]0 F4WEy7yS~=1[B*x:Dj/E/0tw^To9~Dp*' );
define( 'NONCE_SALT',       '{e+?u$Fg53G)t$y_XeBPzmKWg%u+n&As^2e!L9>C1&ZI<~_MdeIBH6!E$%~[|sPp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
