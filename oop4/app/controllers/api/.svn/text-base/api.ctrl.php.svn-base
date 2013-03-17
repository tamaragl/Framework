<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Api's class to manage info about films
 */
class ApiApiController extends Controller
{
	/**
	 * Store a template
	 * @var string
	 */
	protected $template  = 'api/api';

	protected $methods = array(	'films' => 'searchFilm',
								'status' => 'status',
								);

	protected $method = '';

	protected $params = array();

	
	public function build()
	{	

		$this->getURL();
		$request = $this->createRequest();
		$this->view->setView( $this->template );		
		//$this->addHeader("Content-type: application/json");
	}

	public function status()
	{
		$this->addHeader("HTTP/1.1 200 OK");

		return  array( 'status' => 'ok' );	
	}

	public function createRequest()
	{

		$response =  json_encode(	
							call_user_func_array( 
													array( 	$this, $this->methods[ $this->method ] ),
													$this->params )
							);

		$this->view->assign("response", $response);
		
	}

	public function searchFilm( $title = '', $description = '' )
	{
		$film = Factorymodel::getClass( 'FilmFilmModel');
		$result = $film->getFilmsWithTitleAndDescription( $title, $description );

		return $result;
	
	}

	public function getURL()
	{
		$get = $this->get->getValues();		
		$url = explode('/', $this->server->getValue('REQUEST_URI', 'text'));

		$this->method = $url[2];
		$this->params = $get;

	}


}