<?php

require_once("/var/www/wc/trainee2013/oop4/app/config/routes.class.php");
require_once("/var/www/wc/trainee2013/oop4/core/classes/filter_server.class.php");

class RoutesTest extends PHPUnit_Framework_TestCase
{

	/**
	 * Store controller must run
	 * @var string $controller
	 */
	protected $controller;
	
	/**
	 * Store values of $_SERVER
	 * @var array $server
	 */
	protected $server;	

	/**
	 * Store the types of URL with patterns
	 * @var array $url_pattern
	 */
	protected $url_pattern  =  array(
				'register'			=> 'register',
				'login'				=> 'login',	
				'logout'			=> 'logout',	
				'forgot-password'	=> 'forgot-password',	
				'welcome'			=> 'welcome',				
				'list-stores' 		=> 'list-stores',
				'edit-store' 		=> 'edit-store/([0-9]+)',
				'new-store' 		=> 'new-store',
				'delete-store' 		=> 'delete-store',
				'list-staff'		=> 'list-staff',
				'edit-staff'		=> 'edit-staff/([0-9]+)',
				'new-staff'			=> 'new-staff',
				'delete-staff'		=> 'delete-staff',
				'staff' 			=> 'staff/([A-z]+)'
	);

	/**
	 * Store the types of URL with controllers
	 * @var array $url_controller
	 */
	protected $url_controller = array(
				'register'			=> 'StaffRegisterController',
				'login'				=> 'StaffLoginController',
				'logout'			=> 'StaffLogoutController',
				'forgot-password'	=> 'StaffForgotpasswordController',	
				'welcome'			=> 'StaffWelcomeController',
				'list-stores' 		=> 'StoreListController',
				'edit-store' 		=> 'StoreUpdateController',
				'new-store' 		=> 'StoreCreateController',
				'delete-store' 		=> 'StoreDeleteController',
				'list-staff'		=> 'StaffListController',
				'edit-staff'		=> 'StaffUpdateController',
				'new-staff'			=> 'StaffCreateController',
				'delete-staff'		=> 'StaffDeleteController' ,
				'staff'				=> 'StaffProfileController'
	);
	

	public $routes;
	public $uri;

	public function setUp()
	{		
		

		$_SERVER['REQUEST_URI'] = 'staff/tam';
		$this->uri= $_SERVER['REQUEST_URI'];

		$server = new FilterServer;
		$this->server = $server;


		$this->routes = new Routes( $this->server );

	}

	public function testRoutesVariables()
	{
		$this->assertCount( 14, $this->url_controller);	
		$this->assertCount( 14, $this->url_pattern);
	}

	public function testIsEmptyRequestUri()
	{
		$this->assertNotEmpty( $this->server );
	}

	public function testGetController()
	{

		$this->assertInternalType( "string", 
							$this->routes->getController());


	}
}