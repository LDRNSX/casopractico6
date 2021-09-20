<?php

// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
// END iThemes Security - No modifiques ni borres esta línea

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
define( 'DB_NAME', 'casopractico6' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p@ssw0rd' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'z*Iq.q`LZz4IJOgxOED7l[^^P(;_K|CYZ (mY~$RBu9/l$O/Kw9tafM5jLOne!:m' );
define( 'SECURE_AUTH_KEY',  '0+TKx[;NAm+m-7ZOk`niO:=->,uOH3o1. .]2^^fuW{/q/zV0C-Pi+/Z=cY_UBJO' );
define( 'LOGGED_IN_KEY',    '+A=.K6f@K@/};[8^3D<x<Lk)&1D.Ri.<RDBEFVLxX>[&@]wj[K<`:eb-8a5GgSs(' );
define( 'NONCE_KEY',        ';SZ@cB_M10|VQs0e@URig(+j>~NxRyZ(IdDih8.+%.**v K+[4XpjyQEtR+aSivz' );
define( 'AUTH_SALT',        'AnC: uf7BU5EV) AMIXyyl1F#Lm5FfxN:];S/PkP1M<?TYjTt^r$K.8)A)E$9xAW' );
define( 'SECURE_AUTH_SALT', 'yZtl oSWFLi>KQ]a|teL`Kw8:.hA&1g&!;_ JBNo3+hf.7DG~uqeKcnJf^`Q;_)/' );
define( 'LOGGED_IN_SALT',   'bn;!^DZ8V3)i?WyEE5Q+r,gz?tk{33Q%J:7`:PE)J+ij0*n5rI9AU$=jHH)}tt2i' );
define( 'NONCE_SALT',       'l< Mttp|6<QmGTn)VF{0P-g(`Q-#mYCHyZXSN=ccDw.kLDb`Rj [{110^$ +,C#9' );

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
