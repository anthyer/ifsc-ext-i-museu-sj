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
define( 'DB_NAME', 'museu_sao_jose' );

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
define( 'AUTH_KEY',         'fmfQ=7C9Q=y>rZ*zb_TyUQNW.[wL&)TaA?<AMB_*=?W9/f%X-luMFG0O}*KF[afH' );
define( 'SECURE_AUTH_KEY',  'O)how0)C4$_>pz8&&$m3;}=12I[c%aOy/}2{R4w8l+wY3_2o{f}eW9kdRA<-F7yX' );
define( 'LOGGED_IN_KEY',    '0OKmkm4}:^qx$o}H<}vg46B5dFF>ROFv(/AN5MVjX1Z]~T8%`TdL^gbaZ8mK}Vvw' );
define( 'NONCE_KEY',        'PF}xam<7d7KBtBl$=[V%Gaz>/CJ t5/O3<PZsajs4,x2X$xC=G:*b99;e0t`(h~/' );
define( 'AUTH_SALT',        'i3U)S*PWTRmdIYpxAfDB;mD_6eWBC*Vu#tFNBIW^^H+UWLL^fpW]IM~U 0`ahxPR' );
define( 'SECURE_AUTH_SALT', 'DZ;nXA%w,JcJ0qFh6QGh{g/3mw,`VloeL)=.DH*<,J?nKNq+$D+-8FP*JkQi7ZkV' );
define( 'LOGGED_IN_SALT',   ',[x;5pFG1/V%!qA2El:RUM]j{!X.Rn=5AAR7+nf-0Drg)8a=nZb:|+hy_U?SOsj0' );
define( 'NONCE_SALT',       '9l3daWdh4a+R-5#{I`Yz7|aO<tg+LX=[|,[;.Mo0w6{omE[C)yBi*Yf AU-j43I_' );

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
define('FS_METHOD', 'direct');

