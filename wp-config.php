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
define( 'DB_NAME', 'custom_theme' );

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
define( 'AUTH_KEY',         'G?h.=G`n}GT50g`5l;8RRQoN<q1,dJp?d8w#~oN<jP:SV{hJ_Li7mt$+Q8&cx~Y*' );
define( 'SECURE_AUTH_KEY',  'iR)U^0)Zr*B7@-}2]YXFjaQnoAys70?)XB~^*9cKx=]ESm#i1|:-gLn!i0_66G|^' );
define( 'LOGGED_IN_KEY',    '*iPdA7Er!F{M~I,OgAFv8OdJ]_U[KM11>a#z:7H9 w>J!3 f23[_Fq|3u u;d6#R' );
define( 'NONCE_KEY',        'Ewr$IQ.`%.$[i=UXH:[C8.tV1VE9N$r`8SCJbKL_p.qm?8gCqMgb>x4kS5C0GTym' );
define( 'AUTH_SALT',        '1-YtVBaq6o<=B?&zt0VKQyn;5TNM():I0&4z`MERG>oI&a#Is#HhM}/Q%YX4&T$L' );
define( 'SECURE_AUTH_SALT', '+g9Cjg<hzZkAFcGS;|X>G2Cq^>[3&U78?C L3nFX:ADYV]L9(32lBUQmDY[Qu<18' );
define( 'LOGGED_IN_SALT',   'KwEV0DI+*prcBB[l_~Baq.@][NwSkey8235`/YqRO!O<zvwW%Yte_4 n)yO2#Nua' );
define( 'NONCE_SALT',       '%ju<{alRFj9t/aFZ?5G$x^d@y=NvuU t,*]/1k2Rvb+i,d.X{3d0#J%rnFbUmRBx' );

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
