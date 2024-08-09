<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/kC^&(U%KhrEd^/hPI8i#0)3>% 68P8S9V/9JFb}QJ=!Tx_72r+lr+W@clfiix4(' );
define( 'SECURE_AUTH_KEY',  'aOl3nY@+;oj9Y<DEDiqDyrD-Xq[zpv@NWQk%3g9-$/Lmno:nmxERgvtIc^qi<}_T' );
define( 'LOGGED_IN_KEY',    'p9p9tR;/I^M>:|fq$VPIG;6j02@d0^D5[3#pc&Lp+?zBuG8Y_pI;aEx%=f_PwwQa' );
define( 'NONCE_KEY',        'WlSq3K^@AZB0#,AGAJJ>W5s2L~j&-N(~n,Q,:uX:_iDIP.[(?+XeY$7f|iZWT#G7' );
define( 'AUTH_SALT',        'D~Z(jV#t#,t`0^lnPl+oZ<x&T]P=GNoy.25s5E>m8_dO,/V(]5D-y:6Q@k1-.h>8' );
define( 'SECURE_AUTH_SALT', '}6H+%A+7_R|3SJ`2My{CJ7X4kn/l2)_r> )/?01[/Il-E$aOOk^<#I}7LO`q_cnb' );
define( 'LOGGED_IN_SALT',   '! PL/_`lq0Sm+>PudK`IdpH} vdd67i+B<T<tYm8~G=_Bd}iT~JynpSk2PB_H+Vi' );
define( 'NONCE_SALT',       'qv_Y9dVE#g~JO%<oD<TJ@2Bp;1*M,kOd/ckF>{[Fw**1hR)-?rmKl Tv);Geg#ps' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
