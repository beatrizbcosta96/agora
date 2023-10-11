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
define( 'DB_NAME', 'agora_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[^Z:<&(;$dm~FO_[/WGHx$L])GpfY:#P7!Gpn%^=`nDqX~tRiuPI.P-ieMAp!c_]' );
define( 'SECURE_AUTH_KEY',  'b:8~- e<OXMp>u(mF>/_<~_LM:w(Px h}?vV(H&LOUo$i)g8Tu=D[dPTB,Z/6`KE' );
define( 'LOGGED_IN_KEY',    'd7QzREG{tH2isVwb><VC>>Y5}hs_?Nm)C-!lt1q7%yWjFQEM5`sg+g-~Q?)*wF_e' );
define( 'NONCE_KEY',        '?`R/z|9($Mp!XytPX2HJnz8f,5e;.LX-sc:o4}FUscoGVK $2dzkp6K9.GT1Dh;M' );
define( 'AUTH_SALT',        '^oEy;B3YMQn{p}r&&BVOOG4{f0%(>qo(ziHT>xK&;F)2c30)|t7Q,Yk I5aibN[$' );
define( 'SECURE_AUTH_SALT', 'pNA,bOcY%29ThFMm]R|lVH]:g72pQBnt?2=P@z.S?S_oqb5h`sy0M[@Qz9Ng$0pE' );
define( 'LOGGED_IN_SALT',   ')W@-FcNZd*Bshl;&? ad(82yD;&-|Os2aV1&Ehfebdb3uyC{%uwn>-IXa;Sldjg>' );
define( 'NONCE_SALT',       '|TRE{KZfPHb:Y6bg.#! ]`!v@` d]!#4_{q~:MH^Z9@z0W<=2+m}i@L-NBAx;n*m' );

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
