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
define( 'DB_NAME', 'bdd_brief6' );

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
define( 'AUTH_KEY',         '* co5Gddm`_ht0<`p7LxAT-0qHe]YN|RS;AOm.W>:,d[kXyr+~:2fU/%+c73XfaG' );
define( 'SECURE_AUTH_KEY',  'S1/O:,TV`7=M)6jlN*XzFq2ndwoR{Zos/;rrRRQJs~odvF,m0Z_}NO9wZf;](CCr' );
define( 'LOGGED_IN_KEY',    '7/fh(&*9*Y_<+lhvgmE4p]wzhigR2Dg|,!AX-njbf_dB$J%-;z7ojVv)rGG9}mx8' );
define( 'NONCE_KEY',        'w80ZC[R3M]s}=sRZ?[Jnu</.@ELvIpGK(e~#Nr-/T{/U|H0*2uTelSJIjfP?J+{=' );
define( 'AUTH_SALT',        'C+|>%~6n9HF+:679xf(ZgSP`@Y,=dk9Lb], p.z>vcQS$H9_dam=j*Xa3frFxdoU' );
define( 'SECURE_AUTH_SALT', '.`Y~/`o[YCd)~=0p<E/$j4`dl55x_yQ]Sp9u!TYOS.rDCkSC<[blR]t9]XZwL4Y~' );
define( 'LOGGED_IN_SALT',   '{DPS>=KURGq[09^ax.P+/NpI`%NzEL0v_&dD9b{$G_I8B5L+Q@w8P-`L@;I3Pgv?' );
define( 'NONCE_SALT',       'U$4_B[aE9HYrUohkPa7Es=QjO: B!9W#byUbK[(vs9;,Eur^V.jb^j4PRtQO01D;' );

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
