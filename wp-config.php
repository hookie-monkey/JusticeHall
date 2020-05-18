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
define( 'DB_NAME', 'heroic' );


/** MySQL database username */
define( 'DB_USER', 'hera' );


/** MySQL database password */
define( 'DB_PASSWORD', 'hera2020/' );


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
define( 'AUTH_KEY',         '{JZOa0z+EnC646|.`kmp:aEc^WTstMZsAfV=q3Ek)jP#e$Yf2L^@3/loen=KFo`@' );

define( 'SECURE_AUTH_KEY',  'fq9qR%e+jgbT8FPhsD}00 Ig]1|z#X3*>ls$J+~i cV5H]LR[:AX)3QK108K[L)m' );

define( 'LOGGED_IN_KEY',    '|i_&LWvT=SI/2M_e5N9b&t](B5XXk]` #@#4,]0!xDt=ZzTc,{sFRq@Vy,k Pv@[' );

define( 'NONCE_KEY',        'y7&t6z3UUAfoP-?R(vuco]P]],|n7dg:[i_&zR>0o +xro-WMIEOVF94QH3!^P[f' );

define( 'AUTH_SALT',        '8zXbvJS16nN)X,~MC(zw@Eco)d_GYCiEmH#&G>r@jV@0[?]K&#X.d<+S31IsqY}H' );

define( 'SECURE_AUTH_SALT', 'ZY8>{Y_>N2<-1G}v(/`b}6h0mx7+`s1eThxwqWw{eE`~CVzuY,$nq%e=>.s9kxkk' );

define( 'LOGGED_IN_SALT',   ';|?AA9!Ji-7agI SgydB)`VgkV;{`F-e6]MKV7%BFi4~&PS.C&v7OvAJ?*oBz8d`' );

define( 'NONCE_SALT',       'Bl|G<M$Fuh]$WjLlC_|*}(s=>P;v EiH/}TF>~]*uhCVL}y~3L+fE!M;`:o!jXUF' );


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
define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
