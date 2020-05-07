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
define( 'DB_NAME', 'example' );

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
define( 'AUTH_KEY',         'hq8<mQi1d+a%2]MXFD4&kztT-r131rz}oJL;7WXpEhRVNTtz(PEOhg`?<cHfO@_N' );
define( 'SECURE_AUTH_KEY',  '5JFdd.j6Is_<jqpZD6r[Eln3G^72=}7P;|zK_LqWaGe871R3!6(7[$8jzmszwY;3' );
define( 'LOGGED_IN_KEY',    'mjGNMwRt8vI|Lt!8ws7 <zGm?8Ty2i ]sFq6T+=U[:{$_1_P?e~^ofd,7_hth>(=' );
define( 'NONCE_KEY',        '<!c|<O :/^-e^=L/;T~~FtwP!br]y2S@-A(5ZP!,*H^a7EF*@f^@YPrunh{>3#lr' );
define( 'AUTH_SALT',        'V*Ii;c8bz}U+~LuIMwMb)zO>^u{~kaLSo:!v;16pr9o}RD$2Y]e&FYox>JX<m3L$' );
define( 'SECURE_AUTH_SALT', '8p,:q 4NjS9_d#T?oC_-%L,iy<3*Q>W<pzJA)#j-B]o+qqOF M++WZ!+hZP#YmZ=' );
define( 'LOGGED_IN_SALT',   '8~L>8Cf4;[jzB-KsRWj_iy!hxLXUQ}:@Qc?ia<-m`c`g:FQJ:9]t+-%-j0SxhaHK' );
define( 'NONCE_SALT',       'u_-3XX=2[9muz**zveYlwx02v<U[48Pe54N,S!XC~6RC~R1iHBpl#n@9:[!k9xq=' );

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
