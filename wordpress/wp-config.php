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
define( 'DB_NAME', 'foodog' );

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
define( 'AUTH_KEY',         '{khz,}0i)s>/,4I(x_OgKM#*}Bq7TeNt4T<Z>[(l}._K?+F7[6&jds0E-<Vj[,m:' );
define( 'SECURE_AUTH_KEY',  'qbT6qTG_$*&-K,tSig(~5g$]l(_ElO[eF~tMua>0q_a,)=iF6[oic}trmup$g|jl' );
define( 'LOGGED_IN_KEY',    'Ou9R(d_?=b^G,KVDoq>,o[T%3:1s}02qO:k67s7TH2=dwxJ27c_?HT![w(%FI(q/' );
define( 'NONCE_KEY',        'd#!&o{aJyT9@k>||+vj n8P)x^T?<-?,3k&Qxvd6{iv*@|!#g]G~})#1:M4b/YJr' );
define( 'AUTH_SALT',        '>Q%l4m#oF1>-?SU=*ch5+,)BH$OH.DxDb;SH=^cA6i)HUifn01>J1g`_zq`|VkZ~' );
define( 'SECURE_AUTH_SALT', 'n&|xn?kL@n,3{u)](ZKSojj$>z2@=vUq|L{eBT1.KbM0A|]e4;}XM:Gjx+e9ba1H' );
define( 'LOGGED_IN_SALT',   'eEzG$*3eV+<pH5n*!$Ix{?MwF:(.bE,$<2J9t-t93L]/Cyjf}x|PUR;~%N;KI0.e' );
define( 'NONCE_SALT',       '`  O9>Qx7Qb)h)y|*n=,lm!7F!%eZ`#+=:8=a($D1>?#DbfTnXz1}g<s#leNg di' );

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


define('FS_METHOD', 'direct');