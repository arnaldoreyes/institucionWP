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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'institucionwp' );

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
define( 'AUTH_KEY',         'N2_Fjwz#x`hI(z]|2r}M>zx?I )_x3ad4<!L#;6:Hx~WQ%ETI7Q65w<X@^v~904e' );
define( 'SECURE_AUTH_KEY',  'bAJzcyOAL7cQwGy[1W9w`,hyq$M+8y)*[Z!_4P.V/e9fr+oA>76_J#[VMnCYm<3}' );
define( 'LOGGED_IN_KEY',    'q,oGI3^raiqPHdpFxygw9F5~RD$:on4wmJHJh`VOK8Y.svr,3V!G:2w|h086L*FQ' );
define( 'NONCE_KEY',        'T6V{l/N,RZH7GS?woM^dJ}!|gG{%4=CC1CVo@b6?ESp(jdM9XJ8U>5,+#4 LG#+L' );
define( 'AUTH_SALT',        'mg) W-t@iRx5}d,O]x6>.V:#%`Pi$lsFGx+JVC8pQc3tCPy`y8S%y2l*VfR zemc' );
define( 'SECURE_AUTH_SALT', 'NRL+qF!op>N_1:.UtRN30yw(wgZu *ycd/,%!_nO-E(ZB2i8^m&`(<q^LDq7^U+s' );
define( 'LOGGED_IN_SALT',   'WnEm.fJ.CU61M}o<JzKR&kLfue8$.xY4hNO_t(~$a[/bs jcA>L@ogu`64V-Couz' );
define( 'NONCE_SALT',       'rC:uw0yMO.Nr76.FGjZvMy]RJ! 97=EHLQc2a^OE$e3!iRM/U9glK:Gk}Xe +/H`' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
