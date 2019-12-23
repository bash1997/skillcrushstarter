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
define( 'DB_NAME', 'bshwordpress' );

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
define( 'AUTH_KEY',         '`rJc55-<mobd^pdoY1D*[Xmw[ 1?vmv*U2!_G4Pb4G%|$c|(m%fkwGfNLtH{z[*g' );
define( 'SECURE_AUTH_KEY',  ']&(:6I:$c)nyY_R+X_e4%CywKqxCd~CbC>JuQs[PU9k<bN>G7M,TW|#?.$:e7>2;' );
define( 'LOGGED_IN_KEY',    ':SnTm>IPyL=SmYC^DTQ~2eBS,}vr2n^Bd~9(P8h |S3-?3Tllz-A:UQw)x^[g4w_' );
define( 'NONCE_KEY',        'nP%M{(mitGt>uS.UncM#LhY=f^)9,wxwKJNSOL11klSh_`-1,TN@J^.&X?t3D1wE' );
define( 'AUTH_SALT',        'o)O7QBv[e5~sBkH5K:HX6>g7s%lqHygCP9]bRaD@*&<vK]NQy~>P5[!/Z~kfdqnp' );
define( 'SECURE_AUTH_SALT', '_3)rvVj9fc.!42J4zS>{[Mb/qSOVIx!6P*@Zn}if;;JfPq+0*xiNuMg[4.MK0+kt' );
define( 'LOGGED_IN_SALT',   '|=5d-!OTSP+]_2avvx;/-l6-D.n3M#Aq4;$@!z7cgLGG>KZ=h?SBc3vsU*btCt=T' );
define( 'NONCE_SALT',       'ltAV1ca rI_b<{IvaA@cpBow;4jbM_xw^.:U[T6|qa^9qr5x_va?rn-xnSK6e$%o' );

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
