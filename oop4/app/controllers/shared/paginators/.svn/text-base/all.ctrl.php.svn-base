<?php

require_once(_PATH_APP_. 'controllers/shared/paginator.ctrl.php');
require_once(_PATH_APP_. 'classes/paginator_interface.class.php');
/**
 * Create a paginator that return all pages available
 */
class SharedPaginatorsAllController extends SharedPaginatorController implements PaginatorInterface
{

	/**
	 * Generate array of pages to this type paginator
	 * @return array 
	 */
	public function render()
	{
		$this->template = 'shared/paginators/all';
		$total_pages = $this->total_items / $this->items_per_page;		
		$this->view->assign( 'current_page', $this->current_page );	
		return range( 1, $total_pages );
	}

}