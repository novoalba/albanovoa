<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'buqmx01' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '({Af}eCc_]5~KJTJ~[B)CC?Atr 6]^9L2zs`S_tqHbu8JlxBn2eUEsU1&4f!2mZa' );
define( 'SECURE_AUTH_KEY',  '5GHlf_LdHr|QMBvw6>/#pk6=37Pu.I0TUb[g{/+SvMQ Giub)mp+ZZ*DII=*^Oer' );
define( 'LOGGED_IN_KEY',    '4?VndL1sP~hZIu<&(#:1oMCwsF`Lq @R0~P$IV/o<JGeI6vKLT<70M!?8>$%MNk|' );
define( 'NONCE_KEY',        'P-(kh* d0)$GV nKI{(2aPDg9<)J[7 W{1}%~c F&qbdl~?d-55@6fX &E)Ehj6k' );
define( 'AUTH_SALT',        '7DM@%YxIp%8hUuhY6x{!v<04 L+):?iR92D N>fDXnl ]BJ?T$WgrN:^ C&_:I;e' );
define( 'SECURE_AUTH_SALT', ')Ucvp[dHk<G7.=zsL1nL{7lyC`tD_{h-?_mAbmN@l`{x8GCqhS*P]S2#.92Iz Fe' );
define( 'LOGGED_IN_SALT',   'b7z,BT4txI,MUyf9J2W4u7yU<_eYRD}2WGXEf0b}>W>f6DsJXY=G`sfGg srJ@cN' );
define( 'NONCE_SALT',       'd0b!r<pj$9aivii@Y8 tZ1W.4~E+twS$gC&@].Y+fyz?jtg4Wf1~w`#6j!KP:X/2' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
