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
define( 'DB_NAME', 'fastit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Dq~+H`KVKO3XU1N^GZ5anq8$_~;c&xaGvn>ytZy]&7xdHo!20kj|ai;W*_gA$dt+' );
define( 'SECURE_AUTH_KEY',  'n2T;!h;?A3V=n9#oFV2h^)=mDpLkCAE_sd?G%qf4HOA9=sS>#8h8[~,N.S}LGX:O' );
define( 'LOGGED_IN_KEY',    'bP7vO<&`h^~=qJ!Mlp9teDN5=49j*NRA6eH[~I`*v1fo,nl1]~<9rW;+U%,C=`_|' );
define( 'NONCE_KEY',        '>,J.m4l,`sMvfD8zrLGg(-jYbxI[hEje 9y-[{LyIw?>fxio12KN!beoLHhExx8[' );
define( 'AUTH_SALT',        ':k=tU6DP}j^,`}&3pD]h5Y[mtuhSH%d&>=RkEob<>w|x5+h6:ri$VD$1[OTL1<^@' );
define( 'SECURE_AUTH_SALT', 'tszrND7o[F+y:xiaITG0/#(1NXD#o6)]A<=&}%XxFXJ4PstZ0B(f*Js^??Aiao@b' );
define( 'LOGGED_IN_SALT',   'eV1R>#LthY1OE:X6JXbY(+Nf`we1px(mix l$Bmy6NWFkg|^$|6JVJL0@FHjaF#3' );
define( 'NONCE_SALT',       'n]#r&|yZ:x7yhtd%kG@)d]&2 -NwLI>q%w*+HREEs9|2E:MHm>3Z,)RXt,kBu%rM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
