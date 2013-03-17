<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Api's class to manage info about films
 */
class ApiDeleteController extends Controller
{
	/**
	 * Store a template
	 * @var string
	 */
	protected $template  = 'api/api';
	
	/**
	 * Delete a film 
	 * @return string
	 */
	public function build()
	{	
		$this->view->setView( $this->template );

		$params = $this->getParams();		

		if(  $params['film_id'] != '' )
		{
			$film_id = (int)$params['film_id'] ;
			$film = Factorymodel::getClass( 'FilmFilmModel' );
			return $film->removeFilm( $film_id );
		}
		else
		{
			$this->addHeader('HTTP/1.1 400 Bad Request');
		}
				
	}

}