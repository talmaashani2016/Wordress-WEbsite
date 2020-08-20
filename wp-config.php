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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'T98119299t' );

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
define( 'AUTH_KEY',         'ec^tYM`$WPF?`Gsz%vryYoq7Y2B_:t&n /EHWA.FfU&rR5X~oxpJt;Q85RVf(<yf' );
define( 'SECURE_AUTH_KEY',  'ax`,npb|eZgR({5.hA=82Lf_*3Or[bC6=9@Rb(r@G*sW%iWxK/-#UAiv4roi)Cz2' );
define( 'LOGGED_IN_KEY',    '[rwjk%}N2kMUilV.]!(-0&e@2?gE#E3O`&$>C2mxdAa+}~ce!4@#=A`aMlrM/;0`' );
define( 'NONCE_KEY',        '%s87z:p/qtD~l/nYl~EF)Z&8}9(2BkC#f}F|w?O7icg8fB;?%m{#bS `A?M^asA`' );
define( 'AUTH_SALT',        '@kK/c<F|JZHd3^@}@F!xh2{*+jIk Z~0&-Nilza;1;f+}1opMK&M;ZJ2R|9G-/Th' );
define( 'SECURE_AUTH_SALT', 'UGoQqbW;(4J]Y2aM[d+:lm74$(v3/+hHvKkLIFX85;($nG,3Tb(DQE0E&iC?L&!G' );
define( 'LOGGED_IN_SALT',   '2x&l(B`3t>;%sco~DbZHxGBQx!BadTAujPV?Y(goj]28 hzyUsgAwcY NzOhY/Q@' );
define( 'NONCE_SALT',       '9eYD-Eis3aKD_Ny*s,GLevg^xe<k<{lEb;Dtdv@Jzwi@a_,*&.TkPzdP!t[V5r7j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
