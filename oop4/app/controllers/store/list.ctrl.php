<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

require_once(_PATH_CORE_ . 'classes/form.class.php');
require_once(_PATH_CORE_ . 'classes/emailinput.class.php');
require_once(_PATH_CORE_ . 'classes/textinput.class.php');
require_once(_PATH_CORE_ . 'classes/numericinput.class.php');
require_once(_PATH_CORE_ . 'classes/lengthinput.class.php');
require_once(_PATH_CORE_ . 'classes/apc_cache.class.php');


/**
 * Manage data to list store
 */
class StoreListController extends Controller
{

	protected $template = 'store/list';
	/**
	 * Set list template and manage data to list stores
	 */
	public function build()
	{	
		
		$store = Factorymodel::getClass( 'StoreStoreModel' );
		
		$store->setCache( $this->cache );
		$stores = $store->getStores();

		$this->view->assign( 'stores', $stores );
		$this->view->setView( $this->template );
		
	}
}