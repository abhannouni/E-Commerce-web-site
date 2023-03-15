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
define( 'DB_NAME', 'e_commerce_web_site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'Mj}</lhf3jd8a}t(gn>u5|Ipd)K6R3%DTxd(.y^V?f)u++T`/0T^)jp#1C96/ppR' );
define( 'SECURE_AUTH_KEY',  '=oWflZ7KigUU`LPv)>h}-]`hBYmIGCi>JHS@xGLj1kPPVo^[J)I#{HO.HAe4ivC#' );
define( 'LOGGED_IN_KEY',    '3/%:0?J(~%y|WAb[=.<oJhm_v(usgX@@mu$(lq8U{X|:0oE5QJmM(,.gUGw?frMA' );
define( 'NONCE_KEY',        'Pb/-2IK)%L,e ~$#vj;}k`*fi%L5Ygk+WReh&Gt-undW@6q5)5ND=jmf-m,trR{Q' );
define( 'AUTH_SALT',        '2A3;,VaWi KCkS?gWoaRB9Mqlbgu1SuR,^5#/4%Lq2g~?Y)gE,I5EYP^0!kKYy#]' );
define( 'SECURE_AUTH_SALT', '/J<[*[9!3o54?ha=tR[v@<x`$xYqqNu|NU[gO_l  qgp~/yLz}Q2.J;2EO~Ds9]z' );
define( 'LOGGED_IN_SALT',   'MlPbI<%J?ekk.HR8W~ !dt>8wTz2;c=(ZfgWb|}$vBj7jYeM/%X6A|vU7~f`[!dN' );
define( 'NONCE_SALT',       '4>GNVo{]y6h@N&>?22Eb.#s68a:`lwi>[QC$G=<d*-[~}e_[*370Mm0% :2zDN+D' );

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
