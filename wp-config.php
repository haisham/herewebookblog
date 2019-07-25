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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'herewebook_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Saeedkkj1!' );

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
define( 'AUTH_KEY',         '|hs~0qd-G6G$Z$m-),7SDL&5~V+*LNFPSx<&Cjy8?|I.2Su6IO[4#iNad=QAjZH)' );
define( 'SECURE_AUTH_KEY',  ';RfgA%`HE*y6Js5~Q4D5]VoR` %$}gS!-%4p[kcMf~0+)$Wy[4KNy-t46-e`JF@[' );
define( 'LOGGED_IN_KEY',    '/oH*;nMU]qA8f{.Xu[b} j[c:g!R!KikJn;-sH37Yfvo3_qU`k1aw|sb7!!w%bnE' );
define( 'NONCE_KEY',        'b@yNxVgAE`u5ot2bKoea]ovW%$(_2# SL+IU8Ss4$hj2Mg2Z4O,&l2!02ASE[P.d' );
define( 'AUTH_SALT',        '2e1SHiD8N(zM[v(01lE_&IDpW2<&Vq0c 1`t}BY:9feij-{hS&Q4Wx.5f?P^{RBi' );
define( 'SECURE_AUTH_SALT', 'AQ~_bk9x!4KF,7kfWJOBaW5fb&VRbe#abw|E9P*F)Me4}1UF>e?SW:AkDs^:x% 7' );
define( 'LOGGED_IN_SALT',   'g%VTDsZ0MD1Uf#Qrls=))-q-2*J/|#OFLE8*+DwoT^MpK[72,dIY1rWq}q3eF)7c' );
define( 'NONCE_SALT',       'KmzIRG2y#bsZQiZ@ad]i/#8!jOOZ5j6ikrCX>G; |}R5H8$F`CV~5g]8_&d5ZJ=p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'herewebookblog_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
