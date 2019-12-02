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
define( 'DB_NAME', 'topstufff_db' );

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
define( 'AUTH_KEY',         'orGJ?x} <bml*-{fylvh;+Zz9{Oz1QLRV8cFxUsANP>W9-D.uq!3kd &k.e1tbkH' );
define( 'SECURE_AUTH_KEY',  ':Tc34}e$Pi@$89WM|c!N,*CnLc]DeMlD3f  ZN:zOc2WZ2[,pt0Fe.)N!X0J$_<=' );
define( 'LOGGED_IN_KEY',    '5?|TcP?j@yW|,Z)fd^lK4[]nJ5o%xgZ2EJ0`o7vXJ=GwtJ:+5`1,e5F_5Swneu&m' );
define( 'NONCE_KEY',        'L}MQ{{}CH8bdJP7V%Aa@U0ZFC<^D+@14[/Ntg6(&0Z{soc$JWVa<-H,oo ?@@^$.' );
define( 'AUTH_SALT',        'Qn7,HP4-&lE&K^0UX43_Jqmi3tMp$zp;4nSV.rPhgn4HYk 0u_xt.07:`noLvm)u' );
define( 'SECURE_AUTH_SALT', 'b}J.|,#4@qR|#V=Rf)%{OaiZOMjW?:Um#@%izIv`1grt}yN5W~a^L->}%;dP-10D' );
define( 'LOGGED_IN_SALT',   '!UyJGC$!/liK,O!;uWKLm1s5SmI#fjjFDl&rPu rXY8*kV%4(@95<o3-$;Z%R`6@' );
define( 'NONCE_SALT',       '{YGx5Cj#aH/)];dp)w`/k3VMswM(3eN2*!CiCO]DJdUJ:*2S(?{1#7q|h=R[DJn(' );

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
