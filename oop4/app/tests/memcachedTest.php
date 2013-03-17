<?php
require_once( '/var/www/wc/trainee2013/oop4/app/config/config.php' );
require_once(_PATH_CORE_ . 'classes/memcached.class.php');


class MemcachedCacheCacheTest extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$this->memcached = new MemcachedCache( 'localhost', 11211);
	}

	public function testThatStoreKeyAndValueInmemcachedCache()
	{
		$this->assertEquals( 	true,
								$this->memcached->store('key1', 'hola'),
								'Error in input');
	}

	public function testThatFetchKeyOfmemcachedCache()
	{
		$this->assertEquals( 	'hola',
								$this->memcached->fetch('key1'),
								'Error in input');
	}

	public function testThatDeleteKeyOfmemcachedCache()
	{
		$this->assertEquals( 	true,
								$this->memcached->delete('key1'),
								'Error in input');
	}


	public function testThatExistsKeyOfAPCCache()
	{
		$this->assertEquals( 	true,
								$this->memcached->exists('key1'),
								'Error in input');
	}



}