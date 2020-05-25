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
define( 'DB_NAME', 'draft' );

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
define( 'AUTH_KEY',         'gBrt#0c7^kJM-~JKVII/Fto#Kue?0qu/4D<WaXeUOf~&G2ITL&M{KaN> h1@H)ul' );
define( 'SECURE_AUTH_KEY',  '_;}<< n:7CG`aqy6>R21L?o({AXp?R@Veo*Oh6vp)+$*I8oV!](6(zj]}2o%3DLo' );
define( 'LOGGED_IN_KEY',    '0*y-q5SUTm*#]-h^sV2|-<LX?qm*Rs)m@r~8]%.J?;N}dIPDGaB?nsYkwc>qx2fC' );
define( 'NONCE_KEY',        's?Fz//s5K0*MVN5c%JNNb4&LOnGGsDJ*68o<Uk9uk<EJ|&~cm7 tw-7T2>&unfMr' );
define( 'AUTH_SALT',        'Fhp?66h;KZLb:TExIIhyd:b=y8aMJ;Fsi.#)MSf~`+W!]^*=eT}W$!+-p[CtA=s)' );
define( 'SECURE_AUTH_SALT', 'd}HlMq:&2`d{:T#:]uP^p,m7?@C_e<iv&3dC{pxGTU]LQl?Xyls_9hrOMZvOk.of' );
define( 'LOGGED_IN_SALT',   '8Up#`%lZGnPLWF) yR]29f} QNH$O11~#{`i/A{SUH%I!J{WdPB&7gFQvdf$uvM%' );
define( 'NONCE_SALT',       '_n;3BzL}$=27dV|G1WPZnd?N~qK_f}x.9Q&uTal(6`e[Jd @lagmM6R1$xU7Vnir' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
