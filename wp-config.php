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
define( 'AUTH_KEY',         'eRE$rZr.}hgk}M:Qaik.W2cN4048[H@FxScfScvhMY>I)u{2Te9:wIyqVA`.#N@*' );
define( 'SECURE_AUTH_KEY',  '}@s_A6?A`6yu[OOrsNu5>g4jawvN_~B[2Vu9p~L&+k[oe{U$DkGtX8I+p^sDF& :' );
define( 'LOGGED_IN_KEY',    'P!VR.#L6^ubme/WWJ-Ez+Y<kI|w_RnE)Hc^V_,Qv|]*Q$S*Maq`v#Xx/,byN(x*O' );
define( 'NONCE_KEY',        'i<.zn7D@BL^V=pL~}^8w5g!>Kxdf98kWwu G$.073s51 `R~>cKiK5[:XX2#nb;&' );
define( 'AUTH_SALT',        'g&$E6==Kp?fb-Wc0t*FxT4grB7RsNS0FVk[0WCp?2V^Xie>ggyw6-*B]-b)Q&0j&' );
define( 'SECURE_AUTH_SALT', 'sPfwRC`1)n%4W!hNe6 ]e;Q}gu/C/[Fv$cs*5Ge]E~K<!{r L_p8:.c!3k+;[^YO' );
define( 'LOGGED_IN_SALT',   '7Fa5wblB4(&ZNu&O0Wn-.YcVW9*S~pB1adW;Wc4#f,_9vM$vuLnRhF]Lr vC-J:N' );
define( 'NONCE_SALT',       '+!k!*DQoE<Mv@]>zmat ;AoaDZA>=v(t70vSnSVXk=[`BN>]y@N]-ya.m+,f@+{p' );

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
