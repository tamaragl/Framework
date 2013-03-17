<?php

require_once(_PATH_APP_ . 'classes/view.class.php');
require_once( '/var/www/wc/trainee2013/oop4/app/classes/factorymodel.class.php' );
require_once( '/var/www/wc/trainee2013/oop4/app/classes/registrygetdata.class.php' );
require_once(_PATH_CORE_ . 'classes/memcached.class.php');

/**
 * This class represent Controller Layer 
 */
abstract class Controller 
{
	/**
	 * Collected data of $_GET
	 * @var array $get
	 */
	protected $get 		= array();

	/**
	 * Collected data of $_POST
	 * @var array $post
	 */
	protected $post 	= array();

	/**
	 * Collected data of $_SERVER
	 * @var array $_SERVER
	 */
	protected $server 	= array();

	/**
	 * Collected data of $_FILES
	 * @var array $_FILES
	 */
	protected $files 	= array();

	/**
	 * Stare a view object
	 * @var object $view
	 */
	public $view;


	/**
	 * Stare a session object
	 * @var object $session
	 */
	public $session;


	/**
	 * Stare a cookie object
	 * @var object $cookie
	 */
	public $cookie;

	/**
	 * Store a subject object
	 * @var object $subject
	 */
	public $subject;


	/**
	 * Store a cache object
	 * @var object
	 */
	public $cache;


	/**
	 * Store a template
	 * @var object
	 */
	protected $template;

	/**
	 * Store headers to send
	 * @var array 
	 */
	protected $headers = array();

	/**
	 * Store params from URL
	 * @var array
	 */
	protected $params;


	/**
	 * Instantiate a view
	 */
	public function __construct( $subject = false, $view, $cache )
	{
		$this->subject 	= $subject;
		$this->cache 	= $cache;
		$this->view 	= $view;
	}


	/**
	 * Set variables $_GET, $_POST, $_SERVER in this properties
	 * @param FilterGet $get
	 * @param FilterPost $post
	 * @param FilterServer $server
	 */
	public function setFilters( FilterGet $get, FilterPost $post, 
								FilterServer $server, FilterFiles $files,
								SessionInterface $session, SessionInterface $cookie )
	{
		$this->get 		= $get;
		$this->post 	= $post;
		$this->server 	= $server;
		$this->files 	= $files;
		
		$this->session 	= $session;
		$this->cookie 	= $cookie;

	}

	/**
	 * Print a template
	 * @return string html of template
	 */
	public function display()
	{
		echo $this->view->render();
	}

	/**
	 * Sen all headers in array $headers
	 * @return headers 
	 */
	public function sendHeaders()
	{
		if( !empty($this->headers ) )
		{
			foreach ( $this->headers as $value) 
			{
				header( $value );
			}
		}
	}

	/**
	 * Add headers in array $headers to after send it
	 * @param string header
	 */
	public function addHeader( $header )
	{
		array_push( $this->headers, $header);
	}

	/**
	 * Set a Cache Strategy
	 * @param object $cache 
	 */
	public function setCache( $cache )
	{
		$this->cache = $cache;
	}

	/**
	 * Invoke a method from a specific model and with 
	 * a variable number of arguments
	 * @param string $class_name
	 * @param string $method to invoke
	 * @param array $arguments to pass in the method
	 * @return mixed
	 */
	public function getData( $class_name, $method, $arguments )
	{
		$registry = Registrygetdata::singleton();

		$arguments_string = '';
		foreach ($arguments as $value) 
		{
			$arguments_string .= $value;
		}

		$key = $class_name.'-'.$method.'-'.$arguments_string;

		if( NULL === $registry->getObject( $key ) )
		{
			$model = Factorymodel::getClass( $class_name );
			$result = call_user_func_array( array($model, $method), $arguments);
			$registry->storeObject( $key, $result );			
		}
		else
		{			
			$result = $registry->getObject( $key );
		}

		return $result;
		
	}

	/**
	 * Set params from url
	 * @param array $params
	 */
	public function setParams( $params )
	{
		$this->params = $params;
	}

	/**
	 * Get params from url
	 * @return array
	 */
	public function getParams()
	{
		return $this->params;
	}


}
