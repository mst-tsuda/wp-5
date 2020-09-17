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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'tsuda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Misato33100215' );

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
define('AUTH_KEY',         'Y=It# N;m/)S1jk=xFa?/{8w;x3x~srUCIagsM)nJ54#(zpInGzU/2OHRi_WE[/q');
define('SECURE_AUTH_KEY',  'pE}vc<!|<_B@Lx6s~I^rfAO1qtS.bH1u~PRAsNr&$WG$,xEasBO-mC(KXiE?e09O');
define('LOGGED_IN_KEY',    'H knDJx+uyhe?w>;AodFInVY pTyU%KszcPTmHi=VFIp8DNL6-]C+`i6iV:=)%<5');
define('NONCE_KEY',        '|+(WiXJ}Q];-;#-<}vX||sRP{9hq8U,Vz6|z[`w%RmD/Sf2XC8APWQ:-Q3ce5LCN');
define('AUTH_SALT',        '.-:!RH6f)xtQx%`<sedZUxW~K/2IT_Ibw *pUalolh-t4zYQI+(>+)Mbn2wriR{M');
define('SECURE_AUTH_SALT', 'zD1$9kFc8)t6vt0zQXa;M)R,] UkdvY3,>q?qWZuF]h2AQ9dIa0{N?LCnCx.TKS*');
define('LOGGED_IN_SALT',   'K:hn9qL)V3&3hxe+2*(611JPJr}#X1e#ywyS8+)Ujm|@b<8E5V!GMA+y3xvSW- Q');
define('NONCE_SALT',       'wov0M3SW?5gL6D8|@KxE<-(v1y!%J3cPy{QyMY>Z*rhc=OT^whJNfnD(V4q =MbX');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
