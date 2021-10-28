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

define( 'DB_NAME', 'seak1' );

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

define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST'].'/site/seak/'); 		 
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST'].'/site/seak/');	


//define('WP_HOME', 'http://2ef90effb0f0.ngrok.io/seak/'); 
//define('WP_SITEURL', 'http://2ef90effb0f0.ngrok.io/seak/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',.<mg~}X<sM 3~dA2IVVNxze(u3CUXQzg`tw]x?>G(-8CD~;Sw$M`~-xg}Ox(kfz' );
define( 'SECURE_AUTH_KEY',  '7%=H!N6jJ<HxF/Wo[v<Q|;LAgK5fisEQ8xhvi7/5O^Y$skP/;fQQb?s LCG#$y5<' );
define( 'LOGGED_IN_KEY',    '>U-z6`p/O>6CHwN+6DVk$/02uRxIS5|OrjY47C9ve=du>P/Tfhb37UJgohX|RU/1' );
define( 'NONCE_KEY',        '0v}[HYl //h2WA,_I`.E&Y8<U{4`KJL6M]8FEMG`pFm;#*Uw3mC{G3sy!MiLvII$' );
define( 'AUTH_SALT',        'Zy5!dd?uiM@z/IZ=E27M2/03Xs53=nmI;C4ZeS?Jn]S?@Y1w]UidZM6b;O*+IlbK' );
define( 'SECURE_AUTH_SALT', ',YRvW8W)Q{xOE%[ !1/I6bikP~jJiVn[rPkgkA9,{9)A:1ogcl<,$=eWastdaxF_' );
define( 'LOGGED_IN_SALT',   '<pP|IP~ysyV, mbIWZ0Q,4q.?nUYBk/M,QWALrI90s*>yWU,~Tc&-Z_1 LvFk  -' );
define( 'NONCE_SALT',       '}4Xm%p>6O+dFnS}F6c/Hvo<-sDe(z=:[5n9[Vz#ICV&Cp{DM1i.5^`[CQSB@RvL%' );

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


define('FS_METHOD', 'DIRECT');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

