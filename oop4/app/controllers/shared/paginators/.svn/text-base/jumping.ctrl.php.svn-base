<?php
require_once(_PATH_APP_. 'controllers/shared/paginator.ctrl.php');
require_once(_PATH_APP_. 'classes/paginator_interface.class.php');



/**
 * Create a paginator that return all pages available
 */
class SharedPaginatorsJumpingController extends SharedPaginatorController implements PaginatorInterface
{

	/**
	 * Generate array of pages to this type paginator:
	 * the page number advances to the end of a given range, then starts 
	 * again at the beginning of the new range.
	 * @return array $pages
	 */
	public function render()
	{
		$this->template = 'shared/paginators/jumping';
		
		$total_pages = $this->total_items / $this->items_per_page;
		
		$start_range = $this->current_page - ($this->current_page % MAX_PAGES_PER_PAGE);
		$end_range = $start_range + MAX_PAGES_PER_PAGE;
		

		if( $end_range > $total_pages)
		{
			$end_range = $total_pages;
		}

		$pages = range( $start_range + 1 , $end_range );

		$prev_page = $start_range - 1;
		$next_page = $end_range + 1;

		$this->view->assign( 'total_pages', $total_pages );
		$this->view->assign( 'prev_page', $prev_page );
		$this->view->assign( 'next_page', $next_page );
		$this->view->assign( 'current_page', $this->current_page );
		
		return $pages;
	}

}