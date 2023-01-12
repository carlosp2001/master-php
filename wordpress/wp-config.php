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
define( 'DB_NAME', 'aprendiendo-wp' );

/** Database username */
define( 'DB_USER', 'carlosp2001' );

/** Database password */
define( 'DB_PASSWORD', '1C@rlitos' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'v_r6DE9s0 q`W`4]#Cb^1fYH+7Xqr}fwGFA;7?(mus|sBTu+u,ZGl8b#e!NIu2[o' );
define( 'SECURE_AUTH_KEY',  'O6~_cddhnSAAb4US:c8iLIil{,{ke<WAfB:g/RHo(UL<8&M,nBVQ+YDn>#^CjCIH' );
define( 'LOGGED_IN_KEY',    'b|U~(k[sJzW.D;GLqN!.D{,&q^~*Iq*keE V/Z-5mo,7wF$WwE%1Kn^,c`|FJBO6' );
define( 'NONCE_KEY',        '-b&|64M%.gV=|G*1NnxXi&]ANuSbscp(a?Im*R20P{qX`TiB<twvDV-{ef[1SU44' );
define( 'AUTH_SALT',        'Ht(c<H:rJ(.7~P6Pgvq/CcYs-wGw{6x[1@,thwi-#e9}d.y[(Ez:~qbV,wiWVgPw' );
define( 'SECURE_AUTH_SALT', 'A(Hp;w~$O93/)dH/s9-_}gl6UtX6~Aj>)5ECHPAT>TGxYJ`U,^AR/g:UWS>q[KdK' );
define( 'LOGGED_IN_SALT',   'O$;3GZD!j5krQc$3flO:v8VonhSglqUU1R{qUxlzC+zi@h%zk1,nEnxO&J?;F(pf' );
define( 'NONCE_SALT',       'GH,{K9hCa#~MC2|#s04V~-Ds;1wg`9fpCS=;BJ;9_N/P(|V,xDJd`}Z+jM72eRpN' );

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

define( 'FS_METHOD', 'direct' );