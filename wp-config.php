<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '|3{F]4/pR)Q]kM@m^y~;|=1KT@A$}{.V:X+MYm^,%F^.up`eQG:Tvg 1ej7hc;A_' );
define( 'SECURE_AUTH_KEY',  'uAai9^]~QQ]@Y?d77<uGEQlik1aEA%{!<1k`Yt8YGZ-GhNKsIl$QC#!,TEYgA)}e' );
define( 'LOGGED_IN_KEY',    'UOk#XR-Nm/41Nmfz:ds%UZzl?{.-4idH)}jWrwJj^(WJ%8ozVD7-~DC_`chSPC-p' );
define( 'NONCE_KEY',        '9O36 zAtaXO?A<L}0*VOBROq,ta8M4l=~(+a9mP}zLSw@Db}IA.^8GoFO n/,a7y' );
define( 'AUTH_SALT',        'u71kn2UC:uozt;F@bed+&z[6?;Ckf a3m%owfs.<nSY3Jd|InMst9T9/Aevi*2Id' );
define( 'SECURE_AUTH_SALT', 'KU6HDX92}o.4Cb2@)EN9hRx4XHpYkROA3`H[yeDJvMa&2~Nh.x/{<W]4qQl#|V(G' );
define( 'LOGGED_IN_SALT',   'J?qia&.]Be2~oUd*L%y# Z~}A%#|xR;Wh:&4zQuro8#WB!J}X-@eWn.tFZwAwe8Y' );
define( 'NONCE_SALT',       'fv)L3BYB~M:e.t(OUEJep3h6$r1A`Gh)De3LFY4*ZKa+L]$_6ht0}WuuofDq@aaB' );

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
