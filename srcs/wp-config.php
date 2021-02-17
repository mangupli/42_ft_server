
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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         '|UM,3%kA,]M%!.lBYK]f#,KI?AMt~UA4_,`evf|KyjK+gQ_;=NP+lo)>k@Xw~!ZD');
define('SECURE_AUTH_KEY',  't5{Z5qm&g[U5SC6tK)n*b-Rh?q^~zE|]CwPb~H?gU>5(R9i!q5.PJw3q5:n$PuGY');
define('LOGGED_IN_KEY',    '@sLrKt>*Q]Ek|vaAf]x3pI+ecQgI[59a55UWb _=$N3FT+%0=J 7{?iadI}(+Gp+');
define('NONCE_KEY',        'YDm:B5(2>@6OB vUUR|TpIPO--#Qz.1jAu|%?|?e|Gh`%qzvv*~~ |j5@J>z7%89');
define('AUTH_SALT',        'X|PKwCbTg`aak]&g|4 C[GQE@@~|L=5I()Z{jcN)]x-Pk[HD$d-<Vkoq t5+f9&+');
define('SECURE_AUTH_SALT', '~Tf=E^xU9 AW?ztWqD`,eF)!,]@)U9b,L3Qm-HxapH46+!qe,pmh8}HUWjj9.cwv');
define('LOGGED_IN_SALT',   '|L}6z++$@NV~6`[pWE,KH|Co9Ve/NxK?:t6|+N$Le{GwSTN8d&8G?[I_*u 4BKbQ');
define('NONCE_SALT',       'e$x8mNi_:N&SSLAX+eby8j-jFj}bf][Q%Y(y60rsZ}he;qu#`>J$[396{IXX4n._');

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

define('FS_METHOD', 'direct');
