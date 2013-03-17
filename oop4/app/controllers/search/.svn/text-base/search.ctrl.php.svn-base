<?php


require_once(_PATH_APP_ . 'classes/controller.class.php');
require_once(_PATH_CORE_ . 'libs/sphinx/sphinxapi.php');

/**
 * General searcher that allow us to search in actor table, 
 * customer table and film table.
 */
class SearchSearchController extends Controller
{
	protected $template = 'search/search';

	/**
	 * Search a film or/and customer or/and actor
	 */
	public function build()
	{
		$search = $this->post->getValue( 'search', 'text' );
		$submit = $this->post->getValue( 'submit', 'text' );
		$option = $this->post->getValue( 'option', 'text' );	

		$this->view->setView( $this->template );


		if( $submit != '' && $search != '' )
		{
			$result = $this->getResults( $option, $search );

			if( $option == 'all' || $option == 'actor')
			{			

				if( isset( $result['actor'] ) )
				{
					foreach ( $result['actor']  as $key => $actor ) 
					{
						$actor_list[$key]['first_name'] = $actor['attrs']['first_name'];  	
						$actor_list[$key]['last_name'] 	= $actor['attrs']['last_name'];  	
					}

					$this->view->assign( 'actor_list', $actor_list );
				}
			}	 
			 
			if( $option == 'all' || $option == 'customer')
			{				

				if( isset( $result['customer'] ) )
				{
					foreach ( $result['customer']  as $key => $customer ) 
					{
						$customer_list[$key]['first_name'] = $customer['attrs']['first_name'];  	
						$customer_list[$key]['last_name'] 	= $customer['attrs']['last_name'];  	
					}					

					$this->view->assign( 'customer_list', $customer_list );
				}
			}			

			
			if( $option == 'all' || $option == 'film')
			{

				if( isset( $result['film'] ) )
				{				
					foreach ( $result['film']  as $key => $film ) 
					{
						$film_list[$key]['title'] = $film['attrs']['title'];  	
					}

					$this->view->assign( 'film_list', $film_list );
				}	
				
			}

		}

	}


	/**
	 * Get info about film searched, actor searched or customer searched
	 * @param  string $option film, actor or customer
	 * @param  string $search which film or who actor or who customer
	 * @return array
	 */
	protected function getResults( $option, $search )
	{
			$sphinx = new SphinxClient();
			$sphinx->setServer( 'localhost', 3312 );
			

			if( $option == 'all' || $option == 'actor')
			{
				$sphinx->SetSortMode ( SPH_SORT_ATTR_ASC, 'last_name' );
				$sphinx->AddQuery( $search, "index_test2");
			}

			if( $option == 'all' || $option == 'customer')
			{
				$sphinx->SetSortMode ( SPH_SORT_RELEVANCE );
				$sphinx->AddQuery( $search, "index_test3");
			}

			if( $option == 'all' || $option == 'film')
			{
				$sphinx->SetSortMode ( SPH_SORT_ATTR_ASC, 'title' );
				$sphinx->AddQuery( $search, "index_test4");	
			}

			$result_sphinx = $sphinx->RunQueries();

			
			if( $option == 'all')
			{
				$result['actor'] = ( isset( $result_sphinx[0]['matches'] ) ) ? $result_sphinx[0]['matches'] : null; 

				$result['customer'] = ( isset( $result_sphinx[1]['matches'] ) ) ? $result_sphinx[1]['matches'] : null; 

				$result['film'] = ( isset( $result_sphinx[2]['matches'] ) ) ? $result_sphinx[2]['matches'] : null; 
			}
			else 
			{
				$result[ $option ] = ( isset( $result_sphinx[0]['matches'] ) ) ? $result_sphinx[0]['matches'] : null; 
			}

			return $result;
	}
}


