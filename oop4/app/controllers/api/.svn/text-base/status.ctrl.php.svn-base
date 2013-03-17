<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Api's class to manage info about films
 */
class ApiStatusController extends Controller
{
	/**
	 * Store a template
	 * @var string
	 */
	protected $template  = 'api/api';
	
	public function build()
	{	
		
		$this->addHeader( "HTTP/1.1 200 OK" );
		$this->addHeader( "Content-type: application/json" );

		$response =  json_encode( array( 'status' => 'ok' ) );

		$this->view->setView( $this->template );
		$this->view->assign("response", $response);	
	}

}