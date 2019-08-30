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

// ** MySQL settings ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
	define( 'DB_NAME', 'local' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST', 'localhost' );
}else {
	// Production database settings
	define( 'DB_NAME', 'russells_universitydata' );
    define( 'DB_USER', 'russells_wp173' );
    define( 'DB_PASSWORD', 'dbroot' );
    define( 'DB_HOST', 'localhost' );
}



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iEGG1Of0fX63Kmxf5mIStWnpaWbCljTUixzjRnK+ePqBPPbPvWLQMU3tm7L/MUb0HoneLz9qhE/9+Bf4NicGaw==');
define('SECURE_AUTH_KEY',  's7NW7LuhFocq2J2jVxsGBwExFIMRl3caiXRnIFtqOEE4IFcknLFCSsBaT0DSr1NB26Zqj6u668x88Jl0ZWqdGg==');
define('LOGGED_IN_KEY',    'hkjTd3nMkwxNIlNimSXJatqJWmmNZIN+68rh5aj5FiSClrDPHn16vjok9zTV36nXB5QEVa/8p09gHPW5DR6yXg==');
define('NONCE_KEY',        'p+8RVjEqqiNtYy/J+jiXZWnLNbl1hsP92Ha1oRmYBsYz0QRTqVKV9AiaVmBYKlY8cdHB8wym5JWsSPbwZVW5Vw==');
define('AUTH_SALT',        'Vbx/hm6oZm2SYkgGLIYE3G9BCTCh+qEXBrVmunuFVzk7FBaWoZIufrAg1/uxJuxUBP6dTgtMjz7DGpUG7zzp3Q==');
define('SECURE_AUTH_SALT', 'CeaKjdes3sgpTKpadsXag8LJaJJ/vYsf4iCyI+9SYr0AgJje/eBleMGZtfgltpKqgfHxMqjWm6MpgLFM0IIhpw==');
define('LOGGED_IN_SALT',   '6KnybzwVsc0Tj8M2LSPY7i93qoqmH7TOnOTsnVQjB3tKBRsCTKnZ18ZjSfraA6tDG99DGNP4rxx2fMLOZPrDqQ==');
define('NONCE_SALT',       'yF/x6vbopAa8Lag/oOPSmvCHFT+Qj8vkvhLKeaN7bsohRbZ44rN1T1cAsCKt0ZfC1qAcc0PhtJJ7Qm80mmTVzw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
