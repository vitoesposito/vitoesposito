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
define( 'DB_NAME', 'vitoesposito_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/vitoesposito' );

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
define( 'AUTH_KEY',         '0wHt) u/UBUflr% Cw@xt/hYCagK/wXFUe:w<GO%NWOv>:h(,p {abP1oA 8E8@W' );
define( 'SECURE_AUTH_KEY',  'KrN>IQ?$x]gu},I~~P,Nv^8oVE8n@Z>e)hdH[4}x&eOy^n.Np+GsH2~z)}{3d7d,' );
define( 'LOGGED_IN_KEY',    '&/TyL+qhtMm&@5^u5^5U{VUyBB]Ec5SA$CT-$f,hoG=/)y-dYrLu,KFQ8WJN{&rP' );
define( 'NONCE_KEY',        '-w7.#Z7~a-=}.Ux>P(Kf&M={:[; 03-eL]?SHtr^,!%0x(%+4fHMb(d*=|&jWp<0' );
define( 'AUTH_SALT',        'v2s/envEtO*7.7&/bvfAYI|XAFj90GUjkrKe,d/LwD<z/e}b:2XE2L(e}+ee<{kl' );
define( 'SECURE_AUTH_SALT', '}4[Xy8b6P ?+({{RE/&Q)WlEyX,~y&^?:viu@dRX{-wN5=[%LJ)VrHj5EH! &FjB' );
define( 'LOGGED_IN_SALT',   '.3haMoX:VuVx0Aq-0X,+Ux6{&XVs0SOF`!1Y^8c7RR{F]YG3yKeZ<}L,PR)Y;SRl' );
define( 'NONCE_SALT',       '%uCUIt;n7,A0uR@c}8Ne>tD.)59$3b.jc}#=_zDeF%scNe9CA;($qzCn^ANw^30N' );

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
