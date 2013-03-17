<?php

require_once(_PATH_APP_ . 'controllers/shared/apifirstlevel.ctrl.php');


/**
 * Api's class to manage info about films
 */
class ApiCreateController extends SharedApifirstlevelController
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
	public function run()
	{			

		$this->view->setView( $this->template );

		parse_str( file_get_contents( "php://input" ), $post_vars );

		if( isset( $post_vars['title']) )
		{
			$title = $post_vars['title'];		

			$film = Factorymodel::getClass( 'FilmFilmModel' );		
			
			return $film->createFilm( $title );
		}
		else
		{
			$this->addHeader('HTTP/1.1 400 Bad Request');
		}
		
	}

}