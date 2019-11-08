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
define( 'DB_NAME', 'epiz_24635019_w104' );

/** MySQL database username */
define( 'DB_USER', '24635019_1' );

/** MySQL database password */
define( 'DB_PASSWORD', '25@@sS5pXz' );

/** MySQL hostname */
define( 'DB_HOST', 'sql103.byetcluster.com' );

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
define( 'AUTH_KEY',         'ofrh0pwwrl4e4c5guqxqoa4gdt6rfu86zfhoqqslsajuwdbuepatv885jqclgipj' );
define( 'SECURE_AUTH_KEY',  'c5o2yw2r99woabj4oy4kllp4g5uslo88joho4gsw8rcrms5rs0up1exdiqrux5kp' );
define( 'LOGGED_IN_KEY',    'ab9fcec5nt3e9gxo3mti5wcrdmnfm1brvhjrc1sqlld2woc86lwj8kg76ymzkzv0' );
define( 'NONCE_KEY',        'nxfpnlbe8np8lygtrbvubgkfzj43p12ksa87nabnzz8aa9srf8ij9kgpsww1cpze' );
define( 'AUTH_SALT',        'iioe2o1hvxhtec6aqf1jgmfk8vgolqbiui60vikor4ubytf06pxmj4zj1odxsaig' );
define( 'SECURE_AUTH_SALT', 'fwfunkrbyrdigsi5f0thxloqbfvr8ygwmu3efh87ibx1lssg5xioupnairrdqkk9' );
define( 'LOGGED_IN_SALT',   'nsarwhcq0clz5glwh2a9oouydu6x6nqawieabsmrdxaiazj5hqwm2kl0k1spexnq' );
define( 'NONCE_SALT',       'xy14ogrdzluhn3hx4dj5jl1gonyaj81z3ioakakw0fszmcvseciitrcza3x0yayq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpod_';

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
