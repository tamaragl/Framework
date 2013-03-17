<?php 

require_once(_PATH_APP_.'config/routes.class.php');
require_once(_PATH_APP_.'classes/debug.class.php');
require_once(_PATH_APP_.'classes/factorycontroller.class.php');
require_once(_PATH_APP_.'classes/factoryview.class.php');
require_once(_PATH_APP_.'classes/view.class.php');


/**
 * Class execute a controller after ask to route class	
 */
class Dispacher
{
	/**
	 * Get $_GET values
	 */
	protected $get 		= array();

	/**
	 * Get $_POST values
	 * @var array $post
	 */
	protected $post 	= array();

	/**
	 * Get $_SERVER values
	 * @var array $server
	 */
	protected $server 	= array();

	/**
	 * Get $_SESSION values
	 * @var array $session
	 */
	protected $session 	= array();

	/**
	 * Get $_COOKIE values
	 * @var array $cookie
	 */
	protected $cookie 	= array();

	/**
	 * Get $_FILES values
	 * @var array $files
	 */
	protected $files 	= array();


	/**
	 * Store a Subject object
	 * @var object $subject
	 */
	protected $subject;


	/**
	 * Store a Cache object
	 * @var object $cache
	 */
	protected $cache;

	/**
	 * Get name of controller to execute
	 */	
	protected $controller_name = '';

	/**
	 * Get and Set class view for all controllers
	 * @var string $view
	 */
	protected $view = 'View';

	/**
	 * Store params of url from controller
	 * @var array $params
	 */
	protected $params = array();


	/**
	 * Fill variables with $_GET, $_POST, $_SERVER, $_FILES values
	 * @param array $get
	 * @param array $post
	 * @param array $server
	 * @param array $files
	 * @param array $session
	 * @param array $cookie
	 * @param object $subject
	 * @param object $cache
	 */
	public function __construct( 	$get, 
									$post, 
									$server, 
									$files, 
									$session, 
									$cookie, 
									$subject, 
									CaheInterface $cache )
	{
		$this->get 		= $get;
		$this->post 	= $post;
		$this->server 	= $server;
		$this->files 	= $files;
		$this->session 	= $session;
		$this->cookie 	= $cookie;
		$this->subject 	= $subject;
		$this->cache 	= $cache;
	}


	/*
	 * Execute a controller and  pass values $_GET, $_POST, $_SERVER
	 */
	public function dispach()
	{
		$this->getMainController();	

		if( null != $this->controller_name )
		{		
			
			$view 		= FactoryView::getClass( $this->view );

			$controller = Factorycontroller::getClass( 	$this->controller_name, 
														$this->subject, 
														$view,
														$this->cache );

			$controller->setFilters( 	$this->get, 
										$this->post, 
										$this->server, 
										$this->files,
										$this->session,
										$this->cookie );

			$controller->setParams( $this->params );
			$controller->setCache( $this->cache );

			
			$this->preBuild();
			$controller->build();
			$controller->sendHeaders();
			$controller->display();
		}
	}


	/**
	 * Get which controller we have to execute
	 */
	protected function getMainController()
	{
		$route = new Routes( $this->server );
		$this->params = $route->getParams();		
		$this->controller_name = $route->getController();

	}

	/**
	 * Method execute before reuild method of controller.
	 * Check if rebuild is activate or not. 
	 */
	protected function preBuild()
	{
		
		$rebuild = $this->get->getValue('rebuild', 'text');		

		if( $rebuild == 1 )
		{
			$this->cache->flush();
		}
	}
}