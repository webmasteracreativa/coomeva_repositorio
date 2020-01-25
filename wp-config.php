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
define( 'DB_NAME', 'producciones_wp479' );

/** MySQL database username */
define( 'DB_USER', 'producciones_wp479' );

/** MySQL database password */
define( 'DB_PASSWORD', 'i4!X1.4ypS' );

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
define( 'AUTH_KEY',         'nltcezkgpjtpcd2pr8em7ki12sra4ihvnrc2ldzzafdrnatfn8j47nqodtt58uiv' );
define( 'SECURE_AUTH_KEY',  'jeephp2hjc98szna0uw8ggd88j864gn6dgcc1ryo9bgxz2zihqobazjtgervsgzh' );
define( 'LOGGED_IN_KEY',    'qaykztydciznohzc8tso6l78trec9lmjicrerf5ojtctruc6xabitr258bd5bg98' );
define( 'NONCE_KEY',        'xuhjcvbak7bbyobmb5p26o73bvpai9ahrmiwf1pgcjf3gktmrzehc5ezzaxuxhis' );
define( 'AUTH_SALT',        'ryc7jqnniznw8vvbqtrdmmc8ky6qypn4h82psnaiig416vzhwi82vwwxxn1hlibo' );
define( 'SECURE_AUTH_SALT', 'ozpqxaz1pxgqv8oqbsod7u5u4mjx2tnu5b2gqe70fgmtob6onyj8iflzlp8jm8ql' );
define( 'LOGGED_IN_SALT',   'rmd5mkfv6n8xymybqjkwbw1ubhtjv4iwaeu7xk9wa2lu4akjnlx3i5xmpre3djm9' );
define( 'NONCE_SALT',       'asusu8kesi4afduihutmmfjsipsttedj9rltrz7bq8cwu3vfmjnejvevcnnejvhs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpha_';

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
