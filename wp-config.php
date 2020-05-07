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
define( 'DB_NAME', 'theme_dev' );

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
define( 'AUTH_KEY',         'Wz4A?!D7Um l.rv9ZwFmbiCy9fl,(TQwP,Uom +qk<-FGZr% .L]R]B{1zj;$^Kt' );
define( 'SECURE_AUTH_KEY',  '0CI$W?r2R|dG(Hw-42hfR?qI|*`=6TzJ%r=%R0Q~_S/V?&YrR9rqzyt9`7@pW^_i' );
define( 'LOGGED_IN_KEY',    '`7at6oCJQM`#!V.oPdB/Lo,@Ws?jL1`tXP_bHFRScqbVn2:s-y$?G=8#*dQ&QS[T' );
define( 'NONCE_KEY',        ';C9+cuGBF$s.[8kFws{[YY#pLoUSI)vLQR5:O<QWlMxSGZEt!?%0He-Dbd82tR H' );
define( 'AUTH_SALT',        'K1Tpv}(2+={pD^7Dv~~#wff*`cB7WeJw2e/@@9i%HvyMe)>eE@`8wBbZT(~jZ>r(' );
define( 'SECURE_AUTH_SALT', '9)h]nj67^.5psdsj7g]|G/(o9)z<:SLA|pL.f]$)vB.c5~p:B%SUys$QzwrsZT3!' );
define( 'LOGGED_IN_SALT',   ',kr{R^IOo~o%mt)T@kube)vd` r@HRO.4o+1Hsl?vh5=wT8e7tIOoeVn&l<CHzk}' );
define( 'NONCE_SALT',       'vB.f!aT~aMyKES{^WbnA1B*6K1s5e9D)6TC)OH04Z^;>r2Z0m`?5yHGmV2>8X/I>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_theme_';

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
