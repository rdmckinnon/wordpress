<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '%P&+JSag_xTy~[|(B~!&<8MT^%wK_FmIw?Mun0R^rXDZWVp)iBG5e-:]563xOiEG');
define('SECURE_AUTH_KEY',  'JjVr-Lb;s?hdommrKTonAQ@#1+2mf?-5/+7b|#?Zbobl1ocRdqB|NBVn,+||xmUc');
define('LOGGED_IN_KEY',    '~gu57g|Hx$.Q!=D3p+fc/B%a##kt:?HO=+Tsy`Mhz_V-.bW?O5VyD)Kn)|+<-r|]');
define('NONCE_KEY',        '5^`.k3N-n{s2C|Gh*0P1yRZt$IhP*TW,oV&->Nu`5-h;|9SbsEP96%ZZ$k-^Ve*A');
define('AUTH_SALT',        'JAb4Q|M6BB4x;6W3i@M)IK)N-4G7XSMpQTmR<G+ZmbL6|9!0lP!mF*/j{qdTBV~w');
define('SECURE_AUTH_SALT', 'qzxfe#qkual2O_9E6G%P:Axmy6yL7~,K`]kRnyW4?+c)y-L;_QeV&7?S3h<+gK|h');
define('LOGGED_IN_SALT',   '-_#WU#3|iI7^v}7D7gX0mX:Eg{NLe9f,l7`xSMcELk[b|qnmPz@ofl_HFO;s{yyR');
define('NONCE_SALT',       's|)@xSGr/b5_x,EO_=Tagpo5E4#a16([$Oi{wjz|u5DdrGSt$Y[fTk4oOSE`#enF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
