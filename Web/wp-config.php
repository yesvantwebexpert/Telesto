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
define( 'DB_NAME', 'myprojec_telesto' );

/** Database username */
define( 'DB_USER', 'myprojec_telesto_user' );

/** Database password */
define( 'DB_PASSWORD', '$N_)m2F1?0t$' );

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
define( 'AUTH_KEY',         '7ZlaAe&4U#,6xyM+CADWVA*ca3Eo9v=Cc1aFi+mTUXp9>f>B%(K8cWy,;el>.yL7' );
define( 'SECURE_AUTH_KEY',  '`3)3h#&JZ+Ym6ip&AxwyqZT/7%YK|`dc[Ijmi5CMl+,qB2:`m BS{f/w5-YXtTOC' );
define( 'LOGGED_IN_KEY',    ')CwhT&jHww</IzQ@34_ncet8Cb&Q[-/Af8@`<N9[qfrGS7}aLL8m}X26Bd_E3cdz' );
define( 'NONCE_KEY',        'K[;D6G,+K4g?l^gUEiD%_x|t.Jy#JjqJ/1c5F)Pu=VmQ<>Y0&+YDg2P&Bf09a~I5' );
define( 'AUTH_SALT',        '5nCXa4%L/i-*#mcD1b_zl3mjv+4w9lQ)[zAPXnerMNvEIM0,@Qd/Q%rhw3tG6@xi' );
define( 'SECURE_AUTH_SALT', 'z,=RV[J,{6*LufZ0Wd8vx0h,B:BB|[3z>l[<%w{|@Ea~tfnI[`*2AA24u}|sx/-_' );
define( 'LOGGED_IN_SALT',   '*lOuX*3g^</geu]CoUdwE|83)R({lw<neu<+r`Ma7A/dZCy(7n?a<kmYgIpES|]T' );
define( 'NONCE_SALT',       '`iOQB/,&?,*a)o%,=+:MY!y,Fs=(3#;Oybj*/keW$^`L )V1V59SUnJBS86FN$|e' );

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';