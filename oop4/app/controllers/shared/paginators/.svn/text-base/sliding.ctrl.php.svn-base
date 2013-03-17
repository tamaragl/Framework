<?php

require_once(_PATH_APP_. 'controllers/shared/paginator.ctrl.php');
require_once(_PATH_APP_. 'classes/paginator_interface.class.php');

/**
 * Create a paginator that return all pages available
 */
class SharedPaginatorsSlidingController extends SharedPaginatorController implements PaginatorInterface
{

	/**
	 * Generate array of pages to this type paginator:
	 * that positions the current page number in the 
	 * center of the page range, or as close as possible. 
	 * @return array 
	 */
	public function render()
	{
		$this->template = 'shared/paginators/sliding';
		$total_pages = $this->total_items / $this->items_per_page;

		$start_range = $this->current_page - ( MAX_PAGES_PER_PAGE / 2 );
		$end_range = $this->current_page + ( MAX_PAGES_PER_PAGE / 2 ) - 1;

		$start_range = ( $start_range <= 0) ? 1 : $start_range;
		$end_range = ( $end_range > $total_pages ) ? $total_pages :  $end_range;

		$prev_page = $start_range - 1;
		$next_page = $end_range + 1;

		$this->view->assign( 'total_pages', $total_pages );
		$this->view->assign( 'prev_page', $prev_page );
		$this->view->assign( 'next_page', $next_page );
		$this->view->assign( 'current_page', $this->current_page );

		return range( $start_range, $end_range );
	}

}