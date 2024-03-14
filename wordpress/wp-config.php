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
define( 'DB_NAME', 'github_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'g,[>lZtATlP,9{<N.=SKc$=KW,&Ies#>n!&lE o`|^UxUO:u@VjT6`V)zn5m;w^n' );
define( 'SECURE_AUTH_KEY',  'Kt5x] aV|qtJ@]kO>eoXbA&=4B*^ZHqxywB0[de!s>f^<4*a9B*aH!~erIp>$`J|' );
define( 'LOGGED_IN_KEY',    '=<qsEu!}GjJ.DX9{G>P3uy]&:*++8|1}CrK=my(WjB+1is>`[*E|aseqxZ@==M*%' );
define( 'NONCE_KEY',        'iD-9|Wv& F4&S%4W{GE$(mB0qsvM&QUy<ppt38x-/r]a0v5MD*juE0-4-bo1MB0C' );
define( 'AUTH_SALT',        'l-n8T7:A3cvEH4Z/htK_>jM*G&|*ZEl6V@ j21Jw#t*!CK7jx^B 1q6F*5 FrH?&' );
define( 'SECURE_AUTH_SALT', '{T49qJ1=s#(n_R,_.Mw.q8:wi6CeQGmEW;vUR<dWq~_:vlFaoPi]AQQ:`&s$M$Py' );
define( 'LOGGED_IN_SALT',   '`GTBGl&P3iu(mj7Y`o8]iw2kog^jhrvJWzF`t]=s{Kd,[cp<CF!YUTQ?@J|3Nm&v' );
define( 'NONCE_SALT',       '~tjFe&N)1Z py|Nc.0GoXJ|nsO)svxJ1b.O2uvan@.86;iKL#Kg&_.{W;tMU?m@1' );

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
