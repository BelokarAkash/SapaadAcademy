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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'aw}|Cs;@pzM#+=uf4xoO>.t12_|x=Fb`h#@}p=JB5U<B]XW;wm_afZ!MMc4Peo4p' );
define( 'SECURE_AUTH_KEY',   'Z(LyN]kx~:GZDQ4eBs1vL$(:x@tV!~TRBF<-&~e*O`]Cf#9AAN&1arrP<(!xEG/~' );
define( 'LOGGED_IN_KEY',     'hB<%#/M#p/4Wy+GSQQhua5oZN_}-5)6Yq|W[#a>-m77P8Z5n-4yOQg|5EbH1j%%9' );
define( 'NONCE_KEY',         'pfAxO2OKsD_tAq~8P/=uJtp$W^q7*^I@I=,b[)ez5[pxSQGD{y5V[#BjR7rj>K/%' );
define( 'AUTH_SALT',         'I^=p#^>F2-d~_7NElAp4TH@6 EpN}FCBEkpiV#[/1hnV@SBuMp Ux+*@1WM[6$7M' );
define( 'SECURE_AUTH_SALT',  '2^uBLE2-<r,}Yf;kNT{cCFR}*Y5WV][NAJ/N_0m}hq4pp5sdy$(CrCIu/ZuH)?U:' );
define( 'LOGGED_IN_SALT',    'JU(6^Y;,k@ST,`_$Zd5gf0M$/9p #>eCw8n-i@0U,G38I9}[-co944;w}}27OCx~' );
define( 'NONCE_SALT',        'B 48m8fssYyh[DH5H9uL*azg;N4:$]3ls|%1NcMU?a|ed!c ~&M~-K^a;|uYMB%v' );
define( 'WP_CACHE_KEY_SALT', 'uimNyE&)T0V_R~>q`Y{Mx?=MKae(9w&uuOhF.hM[N/If)!aDo4/4)7h.%K1b[XXb' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
