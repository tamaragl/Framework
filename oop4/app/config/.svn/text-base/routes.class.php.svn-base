<?php

/**
* Class manages the URL to indicate that controller must run
*/
class Routes{

	/**
	 * Store controller must run
	 * @var string $controller
	 */
	protected $controller;

	protected $controller_params;
	
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
				'new-password'		=> 'new-password',	
				'welcome'			=> 'welcome',				
				'list-stores' 		=> 'list-stores',
				'edit-store' 		=> 'edit-store/([0-9]+)',
				'new-store' 		=> 'new-store',
				'delete-store' 		=> 'delete-store',
				'list-staff'		=> 'list-staff',
				'edit-staff'		=> 'edit-staff/([0-9]+)',
				'new-staff'			=> 'new-staff',
				'delete-staff'		=> 'delete-staff',
				'staff' 			=> 'staff/([A-z]+)',
				'list-film'			=> 'list-film/([0-9]+)',
				'list-film-category'=> 'list-film-category/([A-z]+)?',
				'api/status'		=> 'api/status',
				'api/films'			=> 'api/films/',
				'api/film'			=> 'api/film/(.*)',
				'api/film'			=> 'api/film',
				'search'			=> 'search',
				'customer-rental'	=> 'customer-rental/(.*)',

				
	);



	/**
	 * Store the types of URL with controllers
	 * @var array $url_controller
	 */
	protected $url_controller = array(
				'register'			=> array('StaffRegisterController'),
				'login'				=> array('StaffLoginController'),
				'logout'			=> array('StaffLogoutController'),
				'forgot-password'	=> array('StaffForgotpasswordController'),	
				'new-password'		=> array('StaffNewpasswordController'),
				'welcome'			=> array('StaffWelcomeController'),
				'list-stores' 		=> array('StoreListController'),
				'edit-store' 		=> array('StoreUpdateController'),
				'edit-store2' 		=> array('StoreUpdateController'),
				'new-store' 		=> array('StoreCreateController'),
				'delete-store' 		=> array('StoreDeleteController'),
				'list-staff'		=> array('StaffListController'),
				'edit-staff'		=> array('StaffUpdateController'),
				'new-staff'			=> array('StaffCreateController'),
				'delete-staff'		=> array('StaffDeleteController'),
				'staff'				=> array('StaffProfileController'),
				'list-film'			=> array('FilmListController'),
				'list-film-category'=> array('FilmCategorylistController'),
				'api/status'		=> array('ApiStatusController'),
				'api/films'			=> array('ApiFilmsController'),

				
				'api/film'			=> array( 	'ApiAlterController',
												'ApiCreateController',
												'ApiDeleteController',
												),

				'search'			=> array('SearchSearchController'),
				'customer-rental'	=> array('CustomerRentalController'),
	);

	/**
	 * Store the type of URL with posibles params of this URL
	 * @var array $url_values 
	 */
	protected $url_values = array(

				'StoreUpdateController'		=> array( 1 => 'store_id'),
				'ApiStatusController'		=> array( ),
				'ApiFilmsController'		=> array( 2 => 'query'),
				'ApiAlterController'		=> array( 1 => 'film_id'),
				'ApiDeleteController'		=> array( 1 => 'film_id'),
				'StaffProfileController'	=> array( 1 => 'username'), 
				'FilmCategorylistController'=> array( 1 => 'category'), 
				'CustomerRentalController'	=> array( 1	=>	'page'),
				
	);

	/**
	 * Store possible headers can recive controller
	 * @var array
	 */
	protected $controller_method = array(

				'ApiAlterController' 	=> array('PUT'),
				'ApiDeleteController' 	=> array('DELETE'),
				'ApiCreateController' 	=> array('POST'),
		);


	/**
	 * This function get URL and check what type of url is
	 * @param array $server
	 */
	public function __construct( FilterServer $server )
	{
		$this->server = $server;

		$request_uri = $this->server->getValue( 'REQUEST_URI', 'text' );

		$request_method = $this->server->getValue( 'REQUEST_METHOD' , 'text');
		
		foreach ( $this->url_pattern as $url => $pattern ) 
		{			
			$patter_scape = str_replace('/', '\/', $pattern);			
			preg_match( '/' . $patter_scape . '/', $request_uri, $matches);
	
	
			if( !empty( $matches) ) 
			{	


				foreach ( $this->url_controller[$url] as  $controller) 
				{
					
					if( isset( $this->controller_method[ $controller ]) )
					{
						if( in_array( $request_method, $this->controller_method[ $controller ] ) )
						{							
							$this->controller = $controller;							
							$this->matches = $matches;
							break;
						}
					} 
					else
					{
						$this->controller = $controller;						
						$this->matches = $matches;
						break;
					}
					
				}

			}			
			
		}

	}

	/**
	 * Get params from url's controller
	 * @return array
	 */
	public function getParams()
	{
		$params_controller = array();

		if( array_key_exists( $this->controller, $this->url_values ) )
		{
			$params = $this->url_values[ $this->controller ];

			foreach ($params as $key => $value) 
			{
			 	if(array_key_exists($key, $this->matches) )
			 	{
			 		$params_controller[ $params[$key] ] = $this->matches[ $key] ;
			 	}
			 	
			}
		}
		 
		return $params_controller;
	}



	/**
	 * Return controller must run
	 */
	public function getController()
	{		
		return $this->controller;
	}
}