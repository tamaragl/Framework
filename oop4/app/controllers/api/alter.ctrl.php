<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Api's class to manage info about films
 */
class ApiAlterController extends Controller
{
	/**
	 * Store a template
	 * @var string
	 */
	protected $template  = 'api/api';
	
	/**
	 * Edit title film
	 * @return string
	 */
	public function build()
	{	
		$this->view->setView( $this->template );

		$params = $this->getParams();
		$film = Factorymodel::getClass( 'FilmFilmModel' );
		parse_str( file_get_contents( "php://input" ), $post_vars );		
		
		if( isset( $params['film_id'] ) && isset( $post_vars['title'] ) )
		{
			$film_id = (int)$params['film_id'];	
			$new_title = $post_vars['title'];

			return $film->updateTitle( $film_id, $new_title );
				
		}
		else
		{
			$this->addHeader('HTTP/1.1 400 Bad Request');
		}
			
		
	}

}