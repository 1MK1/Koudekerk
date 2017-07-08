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

define('DB_NAME', 'c170web458db1');



/** MySQL database username */

define('DB_USER', 'root');



/** MySQL database password */

define('DB_PASSWORD', 'learn2learn');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');



/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');


define( 'WP_SITEURL', 'http://localhost/Csorbamedia/koudekerk' );  
define( 'WP_HOME',    'http://localhost/Csorbamedia/koudekerk' );

/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'C6OSCFR.s}CwDB,`Hi.ie+T@+V$]db?G_mKbSe-M9xholK/FCF;`Qf*u0NSX*hMK');

define('SECURE_AUTH_KEY',  '.:{zFb9X+;=e;[g1wZ0(%suS@K{];oE)0vR=!L:0y]735^#V2 uJUEPED[WpFN;0');

define('LOGGED_IN_KEY',    'Uw-{E4P4{thuLs}Un-v-M]WBX/$#&>)nGhDc3(vOE`n-gcu,^OI0;P-m|:x$:{6M');

define('NONCE_KEY',        'a$*4{]qLfPw:xy+6r?vIyC(Cp/?b7Z%L) @y&+E_U6oG@N+i2nY.xv1{<-|_}.vE');

define('AUTH_SALT',        '1~n?A-GP$UJzlXe,~)v`^A&OG^nIA$&l;M)rSpcj5^GH|Md(]^[BW<d2-oJh4+So');

define('SECURE_AUTH_SALT', 'Fm/*S$`x!zrI#Sw?O4j6TlGmvJ )g/goyh3+9T08j>rVVr()m:k% ~MFhix`[jNC');

define('LOGGED_IN_SALT',   'FcN0!Afh|uC0d)+%[F7+_gvhqxJd|h<Y@JLyW7$Q$I68/-3fLY1+IIX&j48$+xL_');

define('NONCE_SALT',       '3W+T&&:I0V*vauo[|8nk[T+(ZTV+/kXm/lLft*GM%jE>cNu+ZlllX`97^X`JyVKu');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'krwp_';



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

