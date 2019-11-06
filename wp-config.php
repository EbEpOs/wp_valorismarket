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
define( 'DB_NAME', 'osee' );

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
define( 'AUTH_KEY',         'IPA{^=7^(PTk>y<1#+i;ddpz}#F+o|,8p-#VyAQ^q#UAT.{_{qVhE|x=0G9C!n3*' );
define( 'SECURE_AUTH_KEY',  '1]91y8(+ %lezI8tsx;RtL|7ltA/;2w-e1}HbP=_x9)?h;XSpynixVV_s7,fYX=)' );
define( 'LOGGED_IN_KEY',    '642Ia9mB9+WI,!1! nZU} N$EA}.f^_Z9c4q)6UTPH1CR!t1(SU;YCY|6D<)(i*`' );
define( 'NONCE_KEY',        '[uH.ujp]w`]W2F6(6$?zN-i[))?a6B,u{9RdOj.FSz_oX$BG~j[m]~uNv}?v(j<$' );
define( 'AUTH_SALT',        'GPfCj2W&7Sy8T;zgeLa aOF7F0c*K3(n[AS54Sw4!1qcf;k{4sw1i9!L}y~qev@M' );
define( 'SECURE_AUTH_SALT', 'dITwt:u3->6{+ Z988`zRM>@n{bUZF#U)CZw48LzjFj:wg(azgyj4/d&?F?d8%+0' );
define( 'LOGGED_IN_SALT',   'Ys%Dy:_H1~9Bv#|$|{J%i>^K^Hzr?Y-xS%JdrwN@]Zn-`AKfz9WdA?lGI=-Lri)0' );
define( 'NONCE_SALT',       'h><vFF{7( FO4M.x@C A{EveWUK.3mcvVR,x*p)P?J8I%;=b6d++#aKgu/vU0B*8' );

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
