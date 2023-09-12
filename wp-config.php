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
define( 'DB_NAME', 'hi_web' );

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
define( 'AUTH_KEY',         'Ob}IB+vJNZ+u|&/1Shc0Q@SX,$.G]X-BHU+eJO|1{s`SAU/Zxgvp=ARos~+F0<$E' );
define( 'SECURE_AUTH_KEY',  '--HK_2.q*AtgUvTGxDr:z25U/6s1oS<^AmfMVaLk |Fx/}OA.uWaUvAw+LJ~Jj{E' );
define( 'LOGGED_IN_KEY',    'CHXH`?-V!gT`uk5-{[3yY`_mxmY3yKr|f`&6Ra``D0z)IgfU|:u3+i?V[D[/1S:X' );
define( 'NONCE_KEY',        'I>o_lhyeov>Q3}1t%[t) pqP2_FH|4e%D)ZN4c29~}?PU*sbPXK$/07xG,3ng[|#' );
define( 'AUTH_SALT',        'J^[mJ_C-@o%F>9J O<g*{x6NJqe>3w`?fWbnq!FBgCDxW7bfY,Eq?WrbkYxN<t|r' );
define( 'SECURE_AUTH_SALT', '+~UVE0?2E:hxg%qEH=!aps+q|OIMgDpb}p]A1?o+w-U3}4bC+z/`R]%FPOP%^Lo=' );
define( 'LOGGED_IN_SALT',   '2(Iut}P!}eD=/-7s]O696Lz#3}Q|IxRSOX-@(oM&80Nnl>?DxN!$,QPR`k_~p4e+' );
define( 'NONCE_SALT',       'nHoeUJ(eaEm=@5AK(qKj-0:tvp5&Pf2+S-!L$c.[0`?>gkf!?=4G+w#Iex^uUziX' );

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
