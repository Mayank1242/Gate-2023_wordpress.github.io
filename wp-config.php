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
define( 'AUTH_KEY',         'TYJ^Lw}>7eWW*UwEOM(g{CSjX&={tq{|t]8*~QEd?e`?jEFeY|#6y!*:CPF~|X7 ' );
define( 'SECURE_AUTH_KEY',  '?&FC!HsJlC;Joy5`XA/,8`<8yO=?&dBO;.#K4l:3 T7(1<%*Z[;?@jBmao6eNZgB' );
define( 'LOGGED_IN_KEY',    'J&0>EnpOxznVjJ1uwI*`Ka4c^qpLlKJORKXjh7pVbB=W`Gpb)/_Wyu>-hLeY3zM0' );
define( 'NONCE_KEY',        'O]Bc]CV0q{VM>M;SJw0HlS~5bnk]23,g$QtT2F8*KJyvYB?e90SWLObUBpTU=/05' );
define( 'AUTH_SALT',        '~1Lxdk7&O.*>l.Ifn:QQ]]1GE`!9QQZ#%~GC-_5uzwg9a$.`_BqPNa@a5$xmlGQy' );
define( 'SECURE_AUTH_SALT', '`1y;;AuYbi-rY**NI[2u4w$P5QV#+U*{Uk`8w4Nu2AXo3@6QpfL%~l0II}:b&(pl' );
define( 'LOGGED_IN_SALT',   '9&g4*lLuFlcMYtt@&,.ETW{WDQh];U7N1>elJG&5{<e<gP( c`S5]`O8E][._^08' );
define( 'NONCE_SALT',       'hrkSJyvsDIJK/3uOP*`&[el*bF(fl]B`0=}rU^pd}-okH`#*f>hD/t9e2=nMeC98' );

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
