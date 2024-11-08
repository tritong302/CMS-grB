<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db-test' );

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
define( 'AUTH_KEY',         'wo[/lUmiYgD;hP@<J01rvy0Oi]k@^{@R=Yq)Fdyjroz}]6++[OyO:T<Krc*/O<1@' );
define( 'SECURE_AUTH_KEY',  '(0YVp fL#N@p|>hgncCLZ /N0_=}_Ne~(5#>J3n<&grM;Q&I@U5>[*%Zcq8:[ED-' );
define( 'LOGGED_IN_KEY',    '50+L0c*pOLo1H cR!3EG[XD1D<G{zC[3f8iU[kCT,n.N}VY%[#l%;0X*bkqL}I>@' );
define( 'NONCE_KEY',        'A;A@Tr,Jr4~g%^Q4p+K&K*?<!@PnpC`PC}_@y<,.c:[(dyhtwIJ=w=i#KxD@;YgH' );
define( 'AUTH_SALT',        'Xz_KAWLc@lz(2HT[#MXS-XOZ|Z<:78!pob?!wh.m<t2;zxj[/V3KrL8xq!Hq; 2,' );
define( 'SECURE_AUTH_SALT', '7KO<N>nJ$ogQ)rK#_*-Q8f?4~8&`6aK!o,YZ8FUx0W4];)RbWM45>LdJw=or*IFC' );
define( 'LOGGED_IN_SALT',   'k(s;PsnB/v5q%V#H2cNL!Ug%vT-8X/%{T,VE~s21QWXF]]T1:ZsTIuN2/x;428K>' );
define( 'NONCE_SALT',       '9z`R<a,.kEush>,&zEsXgn*!!Si:>/{ |GMMvX=rI*E{GYpqxH9Jy2KM {muX7`(' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
