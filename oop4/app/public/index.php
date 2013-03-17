<?php
$start = microtime(true);
require_once( '/var/www/wc/trainee2013/oop4/app/config/config.php' );
require_once( '/var/www/wc/trainee2013/oop4/app/classes/factoryfilter.php' );


require_once( _PATH_APP_ .'config/autoload.php' );

require_once(_PATH_CORE_ .'classes/filter_get.class.php');
require_once(_PATH_CORE_ .'classes/filter_post.class.php');
require_once(_PATH_CORE_ .'classes/filter_server.class.php');
require_once(_PATH_CORE_ .'classes/filter_files.class.php');

require_once(_PATH_APP_ . 'config/dispacher.class.php');
require_once(_PATH_APP_ . 'classes/debug.class.php');

require_once(_PATH_CORE_ . 'classes/session.class.php');
require_once(_PATH_CORE_ . 'classes/cookie.class.php');


require_once( _PATH_APP_ .'classes/subject.class.php' );
require_once( _PATH_CORE_ .'classes/memcached.class.php' );


$subject = new Subject;

$get 	= Factoryfilter::getClass( 'FilterGet' );
$post 	= Factoryfilter::getClass( 'FilterPost' );
$server	= Factoryfilter::getClass( 'FilterServer' );
$files 	= Factoryfilter::getClass( 'FilterFiles' );

//var_dump($get->getValue('rebuild','text'),  $get->getValue( 'debug','text' ));

//session_cache_limiter('public');


$session 	= new Session;
$cookie 	= new Cookie;

$debug = Debug::getInstance();
$debug->setStatus( $get->getValue( 'debug','text' ) );




$cache = new MemcachedCache( $get );


$dispacher = new Dispacher( $get, $post, $server, $files, $session, $cookie, $subject, $cache );
$dispacher->dispach();


Debug::getInstance()->showDebug();




$end = microtime(true);

//echo 'Time executed: ' . $start - $end;
