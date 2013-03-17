<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');
require_once(_PATH_CORE_ . 'libs/sphinx/sphinxapi.php');


define( "ITEMS_PER_PAGE", 20 );

/**
 * Show list of staff people
 */
class CustomerRentalController extends Controller
{

	protected $template  = 'customer/rental';
	protected $total_items = 16044;
	protected $current_page = 1;
	


	/**
	 * Manage data to show a list of staff people
	 */
	public function build()
	{	
		$params = $this->getParams();

		if( $params['page'] != '')
		{
			$this->current_page = $params['page'];
		}
		else
		{
			$this->current_page = 1;
		}
		

		$offset = ( $this->current_page - 1) * ITEMS_PER_PAGE;		

		$sphinx = new SphinxClient();
		$sphinx->setServer( 'localhost', 3312 );
		$sphinx->SetSortMode ( SPH_SORT_ATTR_DESC, 'total' );
		$sphinx->setlimits( $offset, ITEMS_PER_PAGE );
		$result = $sphinx->Query ( "", "index_test5" );

		foreach ($result['matches'] as $key => $customer) 
		{
			$customers[$key]['first_name'] = $customer['attrs']['first_name'];
			$customers[$key]['last_name'] = $customer['attrs']['last_name'];
			$customers[$key]['total'] = $customer['attrs']['total'];
		}
	

		$sphinx2 = new SphinxClient();
		$sphinx2->setServer( 'localhost', 3312 );		
		$result2 = $sphinx->Query ( "", "index_test6" );
		
		
		$this->view->assign( 'customers', $customers );		
		$this->view->setView( $this->template );
		
	}


	

}