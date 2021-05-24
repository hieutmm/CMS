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
define( 'AUTH_KEY',         'R`3*Z%s @v1>GRc.ol*j,6eJK td6Qy.jn5@)D{EbX)4tbMdI/8<-ILjh@8b8tq~' );
define( 'SECURE_AUTH_KEY',  'C019M<@H2?$]sO]gw50xxidQ-@;oY>Y{b{JKU;,)?0oAws7g#];DsO&apnD0*K`J' );
define( 'LOGGED_IN_KEY',    'UXGK)j!Hh&kFX=e2+i3&Fab=}2_mLv2^eeHzO^mVC+T4:OJ^g-Oo9qa2fOca/<ZP' );
define( 'NONCE_KEY',        'X4!#IF7cCJ~~JgAZ0.[wXTWJ-a5ezaOynP#}ididi4eYukh%Rihbz0004dg1kOju' );
define( 'AUTH_SALT',        ';~ o)+7$@vY#$2box8U|e$tC&@}|EGd&b(s8t;:gLt&>]0}@Z$/C<Z*0a[ E`M4:' );
define( 'SECURE_AUTH_SALT', 'Ql[Zy{rbFf)^TGZFtqZg>E0B0!C_V;*#sw1aKV9P~ZSGEj2v@V_-j7WLMCy*/!6M' );
define( 'LOGGED_IN_SALT',   '-hXbjNTiJ^ON@dH?=g?a[B,PnQeHA?&d_&|x~.y6!)(3e<k;m|PQeCad3O/X_=X_' );
define( 'NONCE_SALT',       ']K`^dbI,hT&;=;Xz=Y%lOkQ-_p8w~8n*50Od`qWl/QecJ|Z/G1(S%E?1%2@~++? ' );

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
