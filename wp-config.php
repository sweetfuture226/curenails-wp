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
define( 'DB_NAME', 'skardnzb_curenails' );

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
define( 'AUTH_KEY',         'M?Y]1]Ze.c|Hk<sED;p+co;w$H%(wt;>n]9u{fSt8Ci$T53ZTqQ2q-rZl`3bC;SQ' );
define( 'SECURE_AUTH_KEY',  'O`rK s0Ad2!qy{L1te4[mb6)P6MnNr_zP0YhNpk<3Oi4+NEo5$@sOa$3!Zs.S<M$' );
define( 'LOGGED_IN_KEY',    '2P*Bzyq5l 1~Ug7V^hPBKhjHDVl]Q.=}$@h%9CE1(|ix>xh6Myb)NYwwmh,Kpu3J' );
define( 'NONCE_KEY',        'h5+ZFZ7,S9BWar_ w zhM.`+`(m52@{Iey1[LX-#g/$l3H@?#PMii=S|ebd!2A]X' );
define( 'AUTH_SALT',        'l[5|_J8GD!Xj2Qn#Beg2oJIqn-H_aY-)7/`qv7uDSo<4AH)*-{Z0A|kRO#CL?5eR' );
define( 'SECURE_AUTH_SALT', '?o~_466Gf$QA08gY+/#:2tbPYS2qB@dI^&k2`> %q<O!I)<J9C?/I!NtXF8~9<~D' );
define( 'LOGGED_IN_SALT',   'GRlwHqJU&FB(tgk9OO#a/e7fhd|icG|Kvz%NG.K-?-U~&~uvcb6%rQDDxT3mO})R' );
define( 'NONCE_SALT',       ' J?)XJ&njsr+)w?R05ClyM@0BEt%;pAfEB&FCsk/`9FmO4GhZ;?N2>PKW@/?wJYJ' );

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
