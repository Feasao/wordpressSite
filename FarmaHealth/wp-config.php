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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'FarmaHealth' );

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
define( 'AUTH_KEY',         'lH^9p*WOx-R1M|2m*xyoq<H$y[Kh}FZ^zpIf3*Z]%(R3:~?!4ZL7?xpic$!7gmDh' );
define( 'SECURE_AUTH_KEY',  'jcP/`<xC@sr|ynO+x-63XQ%A0t|Z/4,1rM&?(Hkv/gU{RP7},mzMx+CTH#*I)M:I' );
define( 'LOGGED_IN_KEY',    '&>-Kr%Dto:ZN0 s+K+)2 ^}0,FlV~Ah$R5wNsibHQ5,-B0D,6CK}fJjRs_32m~ex' );
define( 'NONCE_KEY',        'I^,=[7jaQp6h_ )1ZD+dy$W~_uxI|urC&IA<iMm2E$wrds(J >Yi!4}r^S>+a=PV' );
define( 'AUTH_SALT',        'U!~m9GH)qB1pzuN6emo 7-|d@%4L5(^_LF|!Y!++-tEdXVdqvIbY$$b/{Pp9N82!' );
define( 'SECURE_AUTH_SALT', ',bKL9k9{/RAOgxo*7Zx*tGMtw3Sxd+p(`)n|)g*@:mzG]t u5p&-$+ymoYX/*9Cu' );
define( 'LOGGED_IN_SALT',   'V3{uo{k65>-?GQ.h(S5*^mQh(h)qlH1x(m*.j/B748ynN=Vir@f%/#J<=6pH>L,[' );
define( 'NONCE_SALT',       '(FQNIXN^a/yZ{zR]iP_e}2.BiE<~C@hAHZCGiuus[Gy(u^Os3vmN/=!5/z$o5$ o' );

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
