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
define('DB_NAME', 'aghabaniamal_db');

/** MySQL database username */
define('DB_USER', 'aghabaniamal_user');

/** MySQL database password */
define('DB_PASSWORD', 'aghabani407');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'DHyC>Dk(aI_`p]lyjC~9FWO/K!Z8cG37q[%r1_P*j`(0Sb/>VzgA;9(Y2?1).*5k');
define('SECURE_AUTH_KEY',  'fC0!+oc_=AK )8x_Isd{{tH !Li2X EuS-D[s}E,I>mFgyv );X6(E[svNH{wT[t');
define('LOGGED_IN_KEY',    'C>gY)8Si15:nt*%M]G *^a]<Z.]/UJ7hNbu^-8L7[lX0}CU%u,PEGFeXG[u[?$#v');
define('NONCE_KEY',        '8c&AC9RH+(SoLE~yxBz02g?B@%Kki@`}g6w%}tV/m*d-5L9b}:*&rpzZ4<|O>7E[');
define('AUTH_SALT',        'vq3)1ND@7;W~>o&ybIg?xmER5JA~]-ML V+E&x~uj[BhdKrAbtJ=.DpMbEuPb)nK');
define('SECURE_AUTH_SALT', 'x2h xCpRc:+/):7uoQ0Y*jyopk:x+ {W&,d<mX;G?j^C(3)@!yWQC]OD(kqFT--Y');
define('LOGGED_IN_SALT',   'o?@`iF!udi/y-NsS2Z3AvXrQJ`P%7:GEllR/`qi|?uoF1FztN^huk.`?PoAMB,MV');
define('NONCE_SALT',       '|JF=zE09(x__@}f2!%6h}]R.nv#=xV./P(L47(Kz =`nNl.;tBy|O1A-tZTO4QPl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
