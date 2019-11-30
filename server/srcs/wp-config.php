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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '4415k1=8{FsUVv.r[4,gMsiW{<pvl)K0T{TjT:S;9M`&aP[II$f.GvV,ivZk:L,c' );
define( 'SECURE_AUTH_KEY',  'g2|#x59+rx1QA]F9eQ/-GBKVoN.e/ijUUjXjzw]+`*A7Mk@r5=H.VWS`{WTf86f$' );
define( 'LOGGED_IN_KEY',    'EKq*{Zr[eBWu*T>{^^-{&tI=cS<lh6N,Z?:0(+GQcv{f{==Nh(wnrhPFuy:- I&J' );
define( 'NONCE_KEY',        '*mIX^y|Q9g78r 23QTA.0y+yo?@8Z~n.{9M,+887!~POJz;3>U:+O@AOqm;)cXeF' );
define( 'AUTH_SALT',        '$p}s=LB/>ff8:Fy!|pbYTt*q c{YY7>sl2&JO`?)<%L~hj=.lyTRa%-AX3-Qq&;0' );
define( 'SECURE_AUTH_SALT', 'rh-v=Sz*,Y9w/_4uyS{_:lkHeX-alv,UOjw! 5T(*S7[?1kq|8R~3$ca bR)00}2' );
define( 'LOGGED_IN_SALT',   '[AiF5k6$&/S HR9J&Y;I3Oxb53NTDaf:?)&])vdR_L;l,czjJ5W(=Ke}!(rQ{5W_' );
define( 'NONCE_SALT',       'RdZki!lWoTDwsg~,eN&8Z%BxRF][{I+rXi4qf$G(,8TS))pN5`V9YHGZW,d+2+C,' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
