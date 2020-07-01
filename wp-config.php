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
define( 'DB_NAME', 'project00' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'J<1,_I^.Y|MYd>QL[$A+d$B3GBe$|LA)^;G<D(>drp/K9x}PVb!ZP0E@Z+#-2$a=' );
define( 'SECURE_AUTH_KEY',  '!9 R|KciDmO0<>ieGbf/kdQkt_%Xu;z2#oDrJ0=|~q6XHzK>nkGAGwbGsQ`9C<SC' );
define( 'LOGGED_IN_KEY',    ':cUu>VV5hox8uOP%L]S3&mz:rZYQZ1BTGT<$Uk>>AAf@8MW-L]Ls8cPB-vzxBy]5' );
define( 'NONCE_KEY',        'bfzj?qxNvP.,6xg^8r gYDR|o# Ix]2,.emv]gj{t.d ELQ(Kl#4M+kK{&@J&NPp' );
define( 'AUTH_SALT',        'v?%qF$t&41ti~*]WjNeE>/GWe`p;4]ce_*,HJF_,O#CXk?5q2P@RfoQf=i0] &fx' );
define( 'SECURE_AUTH_SALT', '|VJ[=hMimECj(:{^JA;)ZP%1mJjHrc`6kAPAh$?U;Ev,>J8b1q)Ss{9Q;Xlat[pB' );
define( 'LOGGED_IN_SALT',   'K2@CBjk?|dohqq!1fK^c^l`a$UJcwW}f$2YibYNQi%z4A!BFDf]{O6,|~)zznooZ' );
define( 'NONCE_SALT',       'xv8;DD/0dw(99qV.T&Q&WPR>Ya20pnEwHQN_j2}VZ5wva:T_M]aYunP,q/&M@1Rw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_5';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
