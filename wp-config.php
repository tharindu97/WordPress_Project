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
define( 'AUTH_KEY',         's%$@[rvvw`1xXI&Kf%y0Jz.l_T2/:vO_}_jsq78Fw8se:<Zp,KtG<W)dr|kgd$!R' );
define( 'SECURE_AUTH_KEY',  'QLKZ9)3b~5`xWWZ->0;dd,I(z<XiyS7E=@uT?nd7cirVM/;~}EMR hB^P0QWMWQr' );
define( 'LOGGED_IN_KEY',    'V=ulX#xmZWB?h:&g!#jAF:%OO$6zTlaVc4,%Ov@RDk ?F:ckp*s@.W=JodQg RO2' );
define( 'NONCE_KEY',        'l@hXp0-aoJ?2eNfnU?k}_(o&) vz~Ksw%vz_tE]X}uM_R/~r,@yA<[ov+WP_t%M+' );
define( 'AUTH_SALT',        'VbypHR~K/OshquCnS?:{t0Rt`Vld}8#_7_Yu}bDzcA[e=Sf[B@U/h^d>MqquuVq>' );
define( 'SECURE_AUTH_SALT', '&%@RnsY1%.5q#ky6x[Y7DOX-<Gaa5XkD;5~=Qkk;McyL.)V{|t;#}v]b(Ww[T4s[' );
define( 'LOGGED_IN_SALT',   '8Lh:(ybz^A57O#$#c)7`pP,{*r=G<XO.r/XEz!/]0;B=*$e*W2<A;gkRSB>-ngj{' );
define( 'NONCE_SALT',       '*O.YI|5/pyRGAdG7?6_i%~K**T1)tCChgK8y9hl-,q$h(q8+t1(Yv^ABMQ+V$,-G' );

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
