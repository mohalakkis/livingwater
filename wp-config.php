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
define( 'DB_NAME', 'lionr835_wp865' );

/** MySQL database username */
define( 'DB_USER', 'lionr835_wp865' );

/** MySQL database password */
define( 'DB_PASSWORD', 'i6uS)@p69V' );

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
define( 'AUTH_KEY',         'fsj7aqufkqjqf8o1mhrjzrfofi9lhqzo2v4hlpvaom70rm779tlhd7zieegzob8i' );
define( 'SECURE_AUTH_KEY',  'pwlgnc6a4pbd0wzym90nhjo37l9cao91dbly53tosypm57l2jn7lby07wpzwhlue' );
define( 'LOGGED_IN_KEY',    'yxjk8excggbfuwyns1vgdxwolhzfkcsfh1hy8bobbiypcuykfvpiorsfvx2qtb4i' );
define( 'NONCE_KEY',        '2pqcikntcw26v1vpf1aiamsahnbyrykwmefolw9emt0xn2scklerqonwpr2xkdlb' );
define( 'AUTH_SALT',        'lllw1hp3vjvzupl2sgr3g4zh5cuyn3tngtx4ohhlvbkueqj6cgadg909hgaurabp' );
define( 'SECURE_AUTH_SALT', 'latbn8oclvluozfkqmtmmae5sepuokzwrtsforxgoxqnhfoqnnl3ubrefw24fkmf' );
define( 'LOGGED_IN_SALT',   'tzyp89szigc8razyw6d3cqae8vkugaytvl4zlhiycjwoexnol6hnxopxjmlexi6j' );
define( 'NONCE_SALT',       'xt0rpyixntjucz9gzmu90mqa3ewm6tocv8sieixapm4sdsvaycxw4az97mvnttuu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpv4_';

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
