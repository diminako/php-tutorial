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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'YK8VKdI71VCbPAc/ed1TK/mF03xeE+x/Ld8b32SGfZnb4GEfGpEdktoJBeaUBaFvDTzJmQPHKVrg2lherA8GiA==');
define('SECURE_AUTH_KEY',  'MISVnTEZlqasjHDJ1Q2Gl6kl+dok030CPEelv2N6/csR/hsWoI8gxN8Qp2Ne1I0xaIOemRZ9tJYgFLqEOVCsUA==');
define('LOGGED_IN_KEY',    'OEsT7Rc4FXT8otYjXRFt/hIs2/JXfmbeRH4HL0csTXSABQjNv84JAjSY6fjVco/GoUf0teDaGdx9cMUBv9062g==');
define('NONCE_KEY',        'mnzh6EvRIhr64IAgzhONgYL9s3VtcF8DTiMCj/J1dD9O0Ec+aiRVJTT/Wpw3t7yF77J4NcLKq+v3IEWdcpkSXQ==');
define('AUTH_SALT',        'O/vSqG3LSFyM/fAT2nE1pdI0z5FZb1bvcPUryPljz7cDMMdAGhKpEIqJ7YbyVxlYa6zYRpHymwbVcz+W02Rjgw==');
define('SECURE_AUTH_SALT', 'O026zTHLcVPVJeUaAjUNfzf21pMr5TGxvxxVcgwqucLP+RXPKETfLdEDS/XEudbw5hGzk/ycPvxa46Cdr5J5zw==');
define('LOGGED_IN_SALT',   'PaLOiK68upb1PwhPzYXosi9cVW78ENSUwVtCRqmlNErNdlDnN6tEvOFHpTo49PJCO9KexeQu0vr1QN4UK8bJUQ==');
define('NONCE_SALT',       'uAMNPFrEFF8fpeuKIMO0rbT4Chb9xaM08tg+G3dnsNV1E2E2ZZiXLDdiNxJJlC5bKh03g5Q3iMLIHldUuKCs5g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
