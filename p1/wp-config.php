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
define( 'DB_NAME', 'pr' );

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
define( 'AUTH_KEY',         'Eu7K?xdv9n]mB9C3%bl-?xCeutR]W_$O[V`Rf)x]!7vxoLc/t;/t:/AUc>g2R7u4' );
define( 'SECURE_AUTH_KEY',  'B4?H<W,c{4Fh;80R/vTGQw_=,/*;+BxwEGnEWa1~:kzgDoF?@NV}x:qTrq?bbSYP' );
define( 'LOGGED_IN_KEY',    '&o}r!/YENP,b6k9$<U`~L_zqU|qXKmdBs]LmU&0}vlcVTr/.L>z%*vyw/:[5Z;P@' );
define( 'NONCE_KEY',        '4H?h^V<:&2ep.LG%N/ZkoH>sOA@*=gC72(zVG6;;/) NE;(| dyyrq!HvTWhP4;3' );
define( 'AUTH_SALT',        'GwVg1[|r&<LD^dX0E$fQU1ToNdkfm?aKlj/a.>iKM0g>Jb>(kzw4z]c{AK||KJMS' );
define( 'SECURE_AUTH_SALT', ' k$*&<n/Q,Y&TttGf1Mti7)x)R2+@br-@HrU,z?!.!yBf@k`zCN:/SW)@3Okz$^0' );
define( 'LOGGED_IN_SALT',   '6SECe@Wix-b]t1b:y4j/br(4_|O5a25<@:^zELQM k^g)9d-?5hWgk2@Y1c30Vg&' );
define( 'NONCE_SALT',       '-8t158?s8 .Ai0ldv/DGVf&<G7y|N^pevga~c>P$FN`WAvvT0EacK<]n3_+b9a%O' );

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
