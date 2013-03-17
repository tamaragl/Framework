<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

define("MAX_PAGES_PER_PAGE", 10);

abstract class SharedPaginatorController extends Controller
{	

	protected $template = '';
	
	protected $total_items = 0;

	protected $items_per_page = 0;

	protected $current_page = 0;

	protected $pages = array();

	protected $type_paginator = 'All';


	public function build()
	{
		$this->pages = $this->render();

		$this->view->setView( $this->template );
		$this->view->assign('pages', $this->pages );
		$this->view->assign('total_items', $this->total_items );
		$this->view->assign('items_per_page', $this->items_per_page );

		$html = $this->view->render();

		return $html;
	}

	public function setCurrentPage( $current_page )
	{
		$this->current_page = $current_page;
	}

	public function setTotalItems( $total_items )
	{
		return $this->total_items = $total_items;
	}


	public function setItemsPerPage( $items_per_page )
	{
		return $this->items_per_page = $items_per_page;
	}

	


	


}