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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'S:WE[yf cuSs}`bM709&]s+E(?u(YjFLvjbJuJ~lr1k(:rIg,or2s+3~}z+9gt_p' );
define( 'SECURE_AUTH_KEY',  'p&=43OKmvxnVmyD`GJ1eYy!?ba$=/>t_)w9#.E CC1YcbZG.gV[LDUW`p@a`gLjp' );
define( 'LOGGED_IN_KEY',    'S[0+q3/ye)E1q 53CfPs^}&=[S3uv(]UO8P(C*#eX-x~;`/5<~6*Cg[,RsaS.Ol8' );
define( 'NONCE_KEY',        '!1Ca$?(X0[=E[O(kVyE3R44F>+&88ghxd*zP=$#5E4]nE1weA5W9q(5fZa-i~UE>' );
define( 'AUTH_SALT',        '#IxZ~ Rxmj?Bai;53abM(OLbtJuJUbQ8>HW>3ng=Dj)BN!,Aaggjn@bE=@TzLJOw' );
define( 'SECURE_AUTH_SALT', '4pr`H=g-d9-?spv^{S,}+T(fN</u<6[>nNB#6iL3G*r+26T2~ip+*-j&SpOo/6kj' );
define( 'LOGGED_IN_SALT',   'I7zaiSj+aNC<Hnw{%-?r6 y%<gd5U$Z]iZf:=3y$j7NrxFRop,7u++vQj@]#GnH3' );
define( 'NONCE_SALT',       '&oC7&/010p9L#?[v mB<HPP|$&y=y{6/!czEv:UD#o_]}um~DT1TgXvN1x:7/_9e' );

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
