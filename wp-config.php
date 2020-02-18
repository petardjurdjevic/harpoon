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
define( 'DB_NAME', 'harpoon' );

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
define( 'AUTH_KEY',         'gMl}xi)3^:eNQ~%/+C,w}l0>~Bl)ZnHboKg$/6rW!$p605aR2lEOUMH9{Ld{wr:I' );
define( 'SECURE_AUTH_KEY',  '^++xvQ>~BXr@B:ZFSx4|V;?37TNzkiy^DV}D^|v4xiV[T)S{sIMN^ha[qNOw9[[Z' );
define( 'LOGGED_IN_KEY',    'Y)6]$cKy;#(]`X!e|@%JMSvoZ:U~k#|!_lq_>t[4F.ANiI1-s:kJsnbn4!J=wFIz' );
define( 'NONCE_KEY',        'Y )}mkQpwj*~jLhJAC_YWpB_mKRn%h6$3H1VMpi(e65D@9]Xo&A[hSX-j %G(ufD' );
define( 'AUTH_SALT',        '|y*NE(i/H+i(QBoH=F6*p?<-89Ca0R)Z]}=eA>I.l}5U:$D~|3C%=b{Tzgn0[>Cl' );
define( 'SECURE_AUTH_SALT', '2Mg:K&.SRC; i,Hj F_xm_Mq5E[2QIwEn<I#XalcEM`W/]39ywv$/ 2|%E4;~y_?' );
define( 'LOGGED_IN_SALT',   ']8-?j:-;aP.+x;@lIS.X;)Ci:tj)a:;.$>+t% .C81`g|$OuFDVV)@Fh]]+h4Ir&' );
define( 'NONCE_SALT',       'h2Vth9&QT42/DJ1c$a#:`f4_YGL1~Xh7OvojE<8NNl}x(j_<#goyVp<ID_%,J^/c' );

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
