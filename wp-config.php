<?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.2721796221494046');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.2721796221494046');
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY','5?hg&P#HZO3-ZVd53G?>Fwhov_J.ls(qKN+S/QjP');
define( 'SECURE_AUTH_KEY','(_#*F*yS=poh,a?jnX!XIM_p0]iYY0v%RTf+w_FM');
define( 'LOGGED_IN_KEY','$^<))NWu.&dc7jJ+]m-u<5FrOC<va-I^_znFC+?q');
define( 'NONCE_KEY','MFux[CHl]fsFREQrg$-k&LE^CbI-)?i4/A.wR)yH');
define( 'AUTH_SALT','adg]We,aKBd(M_sDSuM?+>Td!Q]/?%_JwRi2..vI');
define( 'SECURE_AUTH_SALT','cS1l#U8D$Ts[@ut(Tt)l!Cu>N=lH/1RZG@[ETI+<');
define( 'LOGGED_IN_SALT','o.uo>>^sPEVb],%<,WbZ&VKI-#lunFNq#Mxyc>RC');
define( 'NONCE_SALT',']UKyMig-Pk.l)*0dAY$B?([O&$V2UnkWN50MM3$)');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
