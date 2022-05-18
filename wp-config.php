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
define( 'DB_NAME', 'musainox' );

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
define( 'AUTH_KEY',         'UCC?F2j)5~D7dA(<8SYpu@Weh%V//Qd$M,%/%7]5;(fBsIZT:t@LVu1GCZ5>7]01' );
define( 'SECURE_AUTH_KEY',  'sYNg*y<W^=hTfPTJ=A?wBFbq]96YleSk:AF)w}Ak/6A,swk}r-ou9S,}FNGg1x@^' );
define( 'LOGGED_IN_KEY',    '!r:9;hbdLdq?pU,;*uWrHERw&{WyG};^lfHrzjk,>_ckKl=)X[(1;nTF}tupidYl' );
define( 'NONCE_KEY',        'O>d/|].4JYLGV:Qb335hE9!gN oekh``:^;$wnZM5%1=`7d>h]zVsFezpZ<.11<X' );
define( 'AUTH_SALT',        'Qp_88^Do!szYlP0_R-qqP`q;`}R,,jE:8f3xZo llT>ZV)XMtwjXT2huWaH]BgM@' );
define( 'SECURE_AUTH_SALT', 'BH$Zg{Ib^hz+QLJ1lFg8MAE2,O3g.QJ50A$rv0%itUy1koI_u?KWVw]|23)c]Smw' );
define( 'LOGGED_IN_SALT',   '=ik>7`63-[ ]P)C-In[F.Fqf!0mD}E%3{pcMe&*&FL!?d7HD.BOrj`wZ&^Bs6lq;' );
define( 'NONCE_SALT',       '}jP-{~g;Loi4ASv2@Ce54h<Nt[%cwzht7U37)Pu*YX~8QG YK/E 7i9~>d]7O{kb' );

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
