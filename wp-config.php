<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
<<<<<<< HEAD
define('DB_NAME', 'eighthloDB3teqt');

/** MySQL database username */
define('DB_USER', 'eighthloDB3teqt');

/** MySQL database password */
define('DB_PASSWORD', 'Nbes3sv8By');
=======
define('DB_NAME', 'eighthloDB3bpev');

/** MySQL database username */
define('DB_USER', 'eighthloDB3bpev');

/** MySQL database password */
define('DB_PASSWORD', 'bH9B3kbeSE');
>>>>>>> 761766e2718aa6eaca1c23ebebad64ebae01716c

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
<<<<<<< HEAD
define('AUTH_KEY',         'w9OFOiOZk4kwFz9LTCNhtZt3k3C');
define('SECURE_AUTH_KEY',  'jvgjv8BxEPSDGVYjVXmpdp25J');
define('LOGGED_IN_KEY',  'ru7ru7AL7AORfORfiwfiw7AwzCO');
define('NONCE_KEY',  '03HK3HKZbKYbqsbps69s68NQBNQ');
define('AUTH_SALT',  '8M57MUDamUjl2ouxADR1GLXiRd');
define('SECURE_AUTH_SALT',  'cftw9kz16LO9CQWZKNcetwhnq36');
define('LOGGED_IN_SALT',  '5sv8BPou7AORDGLadORfio1cru7');
define('NONCE_SALT',  '13qt69FT3IKZehTWkn0bhvyCF03');
=======
define('AUTH_KEY',         'MVH8B2jYPSJvmbeVB25yeNEH8ph');
define('SECURE_AUTH_KEY',  '6zZOFI9qiWZQ1twWIFqRFlZWL1r');
define('LOGGED_IN_KEY',  'aXJ8jUE2spaPGxgYbS82vjPBE5');
define('NONCE_KEY',  'HyqehT903tkQHK9wcTWLCtkncO4');
define('AUTH_SALT',  'UG7xXUGrgRG8xmaPAlVYP5umpgM');
define('SECURE_AUTH_SALT',  'sYPSK8kbeVB0svnSncfWC36wnTF');
define('LOGGED_IN_SALT',  'I4uxoULAD4lXaR7xoriOG5uaRU');
define('NONCE_SALT',  '8jmdE580jmeKBE5kneKBE5mskP');
>>>>>>> 761766e2718aa6eaca1c23ebebad64ebae01716c

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'FS_METHOD', 'direct' );
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
