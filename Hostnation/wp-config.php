<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'hostnation_wp993' );

/** Database username */
define( 'DB_USER', 'hostnation_wp993' );

/** Database password */
define( 'DB_PASSWORD', '0cSK.p793-' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'yj3lc7kkc1etkjck4hwusmfh9ll6tfpvuxcxwt1yuxqf9i3yfluafylxswu2ei0o' );
define( 'SECURE_AUTH_KEY',  'wgvqws7ae6akvuiatgobkdijp1hekdsvjhhgzenibldebrwvlldrsfgczcri5ym3' );
define( 'LOGGED_IN_KEY',    '0kbvtofgkeoe05hzlh17c9fq1ctqx8bcgzbub6wk34tdo4o7qnqbfr1i8ke1l0iz' );
define( 'NONCE_KEY',        'vm5ujooahozokidtoem86ljqbdqbnu0aipvkmvryfqpo4s99iuk77obcs81gdicw' );
define( 'AUTH_SALT',        'zu8vd8l0fquqc5gopvilr6ug5djmhu2in0ajok2cdmrtzitv5hrcz5z1znnaa6cy' );
define( 'SECURE_AUTH_SALT', 'shxb3hvjombp2xsmif9w8tosw2zfg9ac375i1zxnflw7867ax6mamx2nqqhslfzu' );
define( 'LOGGED_IN_SALT',   'x2vzv6wxtp2crri9lrqwl9svgzyizbdvfyvpfqoalff7xujn2bu852bkkv9pjd8a' );
define( 'NONCE_SALT',       'lv3aydmghx3cnyjzcruo0pwm3kfnpmp7xnq3c7p5f3sbwzhkl3zfcwmuzcvrcs8g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

ini_set('zlib.output_compression', 'Off');
