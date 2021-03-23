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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
	define( 'DB_USER', 'admin' );

/** MySQL database password */
	define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-service.default.svc.cluster.local' );

//define('FS_METHOD', 'direct');

/** Database Charset to use in creating database tables. */
//define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
//define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_(1`iSwSyH}:-WB^nJVObLh)j)L-#3jW.Kj4Yt%n@ ~VrdfN6;CAleyP/t{|tW #');
define('SECURE_AUTH_KEY',  'F`{|I6M&+_i~S:NnUl|)JhIEqFRewa^OgModG&fAPj&dOvh:de;7A]c(M$CUz|(|');
define('LOGGED_IN_KEY',    '+oucU8;QC#;P(g?-32JuT17^+.|+%Jn4KMH=-Qo-na.(Tnt`rdA>=-L^+]qu2^XH');
define('NONCE_KEY',        'rZKr=cqr8[J4b]=vj()[/svsp@P&i3P~+q!z(WM.G[!-+jxk:7fqE%YQ3jnkfc{Z');
define('AUTH_SALT',        '|Vd/-X>wQQ:|X-Emk}L-+Rn-ctN3Cz52WZ nu,-u|lVq!;C9u][l)GCoTON>yqR-');
define('SECURE_AUTH_SALT', '1o|x~7Od*c.HR$n)yzLNfZ9a1/v2^^#ZUwf=o=/iWfd|3>JoEB +x6b[c|ZHuyv4');
define('LOGGED_IN_SALT',   '@dH52^y{>_AV1wQ9EP)$-Bd*=|-2fB2<o r)S@Oym#w2b=SOK%/VhPA3/ (7fmW+');
define('NONCE_SALT',       'hxQ l6z<qbH!g#+^Xj3Q/M!oRrA2h%]3Qo7y7Ot{YOngw(q#Bh>-:4fF-@cDG*SG');

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
?> 
