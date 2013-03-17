<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');
require_once(_PATH_CORE_ . 'classes/file.class.php');
require_once( _PATH_APP_ . 'classes/imagic_adapter.class.php');
require_once(_PATH_CORE_ . 'classes/session.class.php');
require_once(_PATH_CORE_ . 'classes/memcached.class.php');

define( "ITEMS_PER_PAGE", 25 );

/**
 * Show list of staff people
 */
class FilmListController extends Controller
{
	protected $template  = 'film/list';

	protected $current_page = 1;
	

	/**
	 * Manage data to show a list of staff people
	 */
	public function build()
	{	
		$this->current_page = $this->getCurrentPage();

		$film = Factorymodel::getClass( 'FilmFilmModel');
		$film->setCache( $this->cache );

		$films = $film->getFilmsPerPage( 
											( $this->current_page - 1 ) * ITEMS_PER_PAGE,
										 	ITEMS_PER_PAGE
										);

		$count_films = $film->countFilms();	

	

		$view = FactoryView::getClass( $this->view );
		
		$paginator = Factorycontroller::getClass(	'SharedPaginatorsAllController', 
													false, 
													$view,
													$this->cache );

		$paginator->setTotalItems( $count_films[0]['count_films'] );
		$paginator->setItemsPerPage( ITEMS_PER_PAGE );
		$paginator->setCurrentPage( $this->current_page );
		$paginator_html = $paginator->build();
		

		$this->view->assign( 'paginator_html', $paginator_html );
		$this->view->assign( 'films', $films );		
		$this->view->setView( $this->template );
		
	}


	protected function getCurrentPage()
	{
		$url = $this->server->getValue( 'REQUEST_URI', 'text');
		$url_explode = explode('/', $url);
		
		if( $url_explode[2] != '')
		{
			return $url_explode[2];
		}		
	}


}