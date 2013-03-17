<?php
require_once("/var/www/wc/trainee2013/oop4/app/config/config.php");



class paginatorTest extends PHPUnit_Framework_TestCase
{
	public 	$paginator;

	protected $view;
	protected $cache;

	public function setUp()
	{	
		$this->view = $this->getMockBuilder( 'View' )
							->disableOriginalConstructor()
                    		->getMock();

        $this->cache = $this->getMockBuilder( 'MemcachedCache' )
							->disableOriginalConstructor()
                    		->getMock();	

		$this->paginator = new SharedPaginatorsAllController(
													false, 
													$this->view,
													$this->cache );
	}


	
}
	