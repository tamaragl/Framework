<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Api's class to manage info about films
 */
class ApiFilmsController extends Controller
{
	/**
	 * Store a template
	 * @var string
	 */
	protected $template  = 'api/api';
	
	/**
	 * Get title and description of film
	 * @return string
	 */
	public function build()
	{	
		$this->view->setView( $this->template );

		$this->addHeader( "Content-type: application/json" );

		$title 			= $this->get->getValue( 'title', 'text' );
		$description 	= $this->get->getValue( 'description', 'text' );

		$film = Factorymodel::getClass( 'FilmFilmModel' );
		$result = $film->getFilmsWithTitleAndDescription( $title, $description );
		
		$response =  json_encode( $result );

		$this->view->assign( "response", $response );
		

		return $response;
		

	}


	

}