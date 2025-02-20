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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'dilshan' );

/** Database password */
define( 'DB_PASSWORD', 'dilshan123!' );

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
define( 'AUTH_KEY',         'a/ISxR.:!yM~vy|0xZ BGr@uI 3V&s,F+ Ek$%jnB4Hnk/Y)-k-;0ly_Kof0QI]q' );
define( 'SECURE_AUTH_KEY',  '!hb/>tB{TeqIM=avQ <*KjUdxz V2O,^Ts#pXj;Nm0(L=Y`6hPY)XZXD?pf.5vEd' );
define( 'LOGGED_IN_KEY',    '4E _$YS{Eq=B)Ge}I!lU+L6.I/!<+o /1@:4]WZ-24*RjqLDCkUu5rGx/*d6`M6u' );
define( 'NONCE_KEY',        't-^^&=#{(/ 10XhVQkV[CB`Cp-|*w?q5z Zs<]%zW8!5RV+pkdV_x}J,U]7*;|T_' );
define( 'AUTH_SALT',        '30n4*VLwg)dcv*y{j4]H#B!/qy:8oh&i>$mdWF$!9Uz?Z|P24).ZXD[8v6oM~0BX' );
define( 'SECURE_AUTH_SALT', 'K=wPr]Q~{=ggRf*u8E+M!,R#HoL`qbq~cnRY-_~X Ark!Bf3=a[|0`Zs!b-.x.1V' );
define( 'LOGGED_IN_SALT',   'bE4QQ;^Z#OhZw5%]fRZ#BItl$JTI(j!!Nw+<6H7hp];XkyxOL4=nBD#{P,qV 1jP' );
define( 'NONCE_SALT',       '@[pBH0JwF8y_e]-h@hP#)1gkFMUlfd|:13StOf4d)p3pW3Xtp.@nf<S{DY57&.Bh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
