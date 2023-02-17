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
define( 'DB_NAME', 'main' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '#wordpressadmin1' );

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
define( 'AUTH_KEY',         '7+%;#JqH[2OxSsHW2wF5qsN<1}r~>__DmI+@<LHiL2> ;C;FZNh$vz:V!Kk4MtsA' );
define( 'SECURE_AUTH_KEY',  'tnOO~Z7.(5!PG|)]|_TbdD^wJ@-F`o&oa3wJF~WznuksB-E8Q;|uLADj26,Xna.)' );
define( 'LOGGED_IN_KEY',    'v3y<i=1Y109yYPZ;/-oumIn@EmC8eyx%`=HP*w^S?5ip6[SGA78p=*|f=VBGm$dx' );
define( 'NONCE_KEY',        'o{%Us53=/PLg/h?lQi/E][#B:0L Kcwy_3WfzBb(0>(JG(%[~+!:!+&+@0aJHT9S' );
define( 'AUTH_SALT',        '+5O&-zICU(RW0A_PX{gy2s+M-GjQ%XaGsNqL.)fPzCy cdl=CoZ!RU!:lH0Ds]@)' );
define( 'SECURE_AUTH_SALT', '$[(Uac!??NFJi/.-*E9qiO<MYH;,!iOjL2LyiU~Wg4?{Zex)vq?qV!yERF^kVVrf' );
define( 'LOGGED_IN_SALT',   'y9DaP3}y{1INY=O7u}4q&q=6<QcW?%xnUzqfomt9qFZm65GTxKl~c^Mq>;rEJ&4S' );
define( 'NONCE_SALT',       '}ZvC3$eky(So_CSTwl}#=hG}9IUWJLu`20B6SZsRxfR(~@X&d_}cMI#1hUE<,aOk' );

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
