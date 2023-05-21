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
define( 'DB_NAME', 'nobilex_shop' );

/** Database username */
define( 'DB_USER', 'nobilex_shop' );

/** Database password */
define( 'DB_PASSWORD', 'nobilex_shop' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '2(T1k0eg6]MUmQ_. `YaSQJ,-`j{obWQ8OZjd&]S1VS(2-8BMo7(`;](e@+Bg+=N' );
define( 'SECURE_AUTH_KEY',  '|S+J K@ytX%+$w39.xFfd^R@ge8^cgJH#P+Md.X%h%(&V_Qq%u|SptG/${~/_O.T' );
define( 'LOGGED_IN_KEY',    '0{&Y:(;6#&P:IRK@g]b>G*XR+o` )t2}vY^Lex^~RLwfG{/8Q/0|fv1PN|G{pZ5R' );
define( 'NONCE_KEY',        'mrW-a[O_F).-GjM:($Nmy.gUgLF>W<=N4Cm=L%5hF)}u;tD*1DqwbBm!h/`>A`B~' );
define( 'AUTH_SALT',        'W9S)~~]]KTImW2AhT@F;*;4q!eF=MVxJ:$h[QsRc+VOFqM&4:l0N`<L1md|7kU,!' );
define( 'SECURE_AUTH_SALT', '*n}3bw$Y*=@nU}e_i=#n$,4Ar%)38rS!7Ts./7jKt4g6>iTMgK{V~(=LYYQ8OzQ3' );
define( 'LOGGED_IN_SALT',   'Xrge*3f9[d VCx)EX=Eac%j6y?YQ~v3)e)Evlmi9yn!(CJ44e|@0}oqm)-Xc~Gt;' );
define( 'NONCE_SALT',       '[^D6^6q7.Wx(HgU>/X|`~ WH=:DA_ekM`D}?ZJho.02w6,<fcBiK[jW?5`kPtW8<' );

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
