<?php
require_once( '/var/www/wc/trainee2013/oop4/app/config/config.php' );
require_once(_PATH_CORE_ . 'classes/apc_cache.class.php');


class APCCacheTest extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$this->apc = new APCCache;
	}

	public function testThatStoreKeyAndValueInAPCCache()
	{
		$this->assertEquals( 	true,
								$this->apc->store('key1', 'hola'),
								'Error in input');
	}

	public function testThatFetchKeyOfAPCCache()
	{
		$this->assertEquals( 	'hola',
								$this->apc->fetch('key1'),
								'Error in input');
	}


	public function testThatExistsKeyOfAPCCache()
	{
		$this->assertEquals( 	true,
								$this->apc->exists('key1'),
								'Error in input');
	}


	public function testThatDeleteKeyOfAPCCache()
	{
		$this->assertEquals( 	true,
								$this->apc->delete('key1'),
								'Error in input');
	}


	public function testThatAddKeyOfAPCCache()
	{
		$this->assertEquals( 	true,
								$this->apc->add( 'key2', 'adios' ),
								'Error in input');
	}


}