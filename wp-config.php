<?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.2570661721400065');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.2570661721400065');
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
define( 'AUTH_KEY','jI6zl/d2GL,h@E6vEFS6Y@O73]dIE*!GJo#tEE7b');
define( 'SECURE_AUTH_KEY','HOX[*5AWl*mv+J[v[S@+2b>Vvm^R>G@j7ub*-K^4');
define( 'LOGGED_IN_KEY','AUvU.&$+SP-T61P1OVk0fy*O4y-r@XlNUe(aDF?V');
define( 'NONCE_KEY','dP$a_C$3$Or,ab4ZPMB>7<%F$-Ce[yY]8$@##4L7');
define( 'AUTH_SALT','aVp9zx.do?2,Y3H^]0oE=X.7h436e-U,4F-Dh=oi');
define( 'SECURE_AUTH_SALT','NFK=pk4G/YdmSU5=-!11P0KqoyqX*tT!x-*Z)N93');
define( 'LOGGED_IN_SALT','7Y!Ssnm).V.QVL1EEljAdV5*KkknR9k88W4e>T-D');
define( 'NONCE_SALT','N%i/6Opk,ssw^$[jeGm,0<d@1BFMA0]R&T/<mJ/&');

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
