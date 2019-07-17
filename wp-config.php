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
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'u8>w)BE@ JL^WQm%Lafxo(#k_+1d&Xtxr2OxM;-y[W<:eLz*nW/(dzXVt8b`AvN2' );
define( 'SECURE_AUTH_KEY',  '.[^Z7wsiLKw[qutE;JTlC2ok:* |n(}m=d7X$Do&O[k`%aE4H|Qr_emjb?0?N_4b' );
define( 'LOGGED_IN_KEY',    'mWe_ ]s;W73P2L?UQ!AqXa2G$p7J}eCNcX7R~<19L%,R84>Co~&*azy.:f}o|a A' );
define( 'NONCE_KEY',        'e#8(|.(.4HqA#[9=vuLQE>wNE! +M),*L=;.t`^=E|EgLZ}VcbyV7{^|XVz)&o^2' );
define( 'AUTH_SALT',        'T[Yid+mP U^%oPDW(c5^?_IPztWq/7h;z`>Ldk+-%Tn9Ru[-AEgNdw)5Kh}eD2he' );
define( 'SECURE_AUTH_SALT', '=Mz7Y-)l_y7y]<%Oz%34ZCO]j^GI10Z@rc~q@ugARNT`jfm[6VIhQI;Ze%A(iT9.' );
define( 'LOGGED_IN_SALT',   'jCtbq:MP8cT[K]M(rPgV(bRP&-zE#uzvOcm4a;yEt_nWVv>qXj/]Qn&O38+gP+Oo' );
define( 'NONCE_SALT',       'SS3d=i|P&Zp~N/t9EG2v=H*YtRQvmvjh#!zYtUu?<%5}l:>IEd~cuz&[M|v7!2#U' );

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
