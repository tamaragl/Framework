<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');
require_once(_PATH_CORE_ . 'libs/sphinx/sphinxapi.php');



define( "ITEMS_PER_PAGE", 25 );

/**
 * Show list of staff people
 */
class FilmCategorylistController extends Controller
{
	protected $template  = 'film/category_list';	

	/**
	 * Manage data to show a list of staff people
	 */
	public function build()
	{		
		$this->view->setView( $this->template );		
		
		$menu_categories = $this->getCategoriesMenu();
		$film_list = $this->getFilmsList();
	

		$this->view->assign( 'menu_categories', $menu_categories);
		$this->view->assign( 'film_list', $film_list);
		
	}


	public function getCategoriesMenu()
	{	

		$sphinx = new SphinxClient();
		$sphinx->setServer( 'localhost', 3312 );
		$sphinx->SetSortMode( SPH_SORT_EXTENDED , "name ASC" );
		$sphinx->SetFilter( 'total_found', array( 61 ), true );
		$results = $sphinx->Query( "", "index_src1" );

		foreach ($results['matches'] as $key => $category) 
		{
			$menu_categories[$key]['name'] = $category['attrs']['name'];
			$menu_categories[$key]['total_found'] = $category['attrs']['total_found'];
		}
		
		return $menu_categories;

	}


	public function getFilmsList()
	{
		$current_category = '';
		$params = $this->getParams();	

		$cache_key = "getFilmsList";

		if( $this->cache->exists( $cache_key ) )
		{
			echo 'cache in action';
			$film_list = $this->cache->fetch( $cache_key );
		}
		else
		{
			echo 'no cache';
			$sphinx = new SphinxClient();
			$sphinx->setServer( 'localhost', 3312 );
			$sphinx->SetSortMode( SPH_SORT_EXTENDED , "title ASC" );
			$sphinx->setLimits(0,1000,1010);
			$results = $sphinx->Query( "", "index_src0" );	

			foreach ($results['matches'] as $key => $film) 
			{
				$film_list[$key]['title'] = $film['attrs']['title'];
			}

			$this->cache->store( $cache_key, $film_list, 5 );
		}
		

		/*$films = FactoryModel::getClass('FilmFilmModel');


		if( isset( $params['category'] ) &&  $params['category'] != '')
		{
			$current_category = $params['category'];
		}

		if( $current_category != '' )
		{
			$film_list = $films->getFilmsOrderByTitleFilterCategory( $current_category ); 
		}
		else
		{			
			$film_list = $films->getFilmsOrderByTitle();
			
		}*/

		return $film_list;

	}


	


}