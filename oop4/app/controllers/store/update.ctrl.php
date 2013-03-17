<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Manage data to update a store
 */
class StoreUpdateController extends controller
{

	protected $template = 'store/update';
	/**
	 * Set form template and manage data to update a store
	 */
	public function build()
	{
		
		/*header('Cache-control: public');

		$last_modified = time() + 3;//'Mon, 25 Feb 2013 03:19:32 GMT';
		$last_modified_server = (int)$this->server->getValue('HTTP_IF_MODIFIED_SINCE', 'text');

		$date_last_modified = strtotime( $last_modified );
		$date_last_modified_server = strtotime( $last_modified_server );

		if( $last_modified_server >= $last_modified)
		{
			header('HTTP/1.1 304 Not Modified');	
		}
		else
		{	
			header('Last-Modified: ' . $last_modified);
		}*/



		
		$store_id 	= $this->getStoreIdByUrl();		
		$submit 	= $this->post->getValue( 'submit', 'text' );		
		$store = Factorymodel::getClass( 'StoreStoreModel' );

		if( !empty( $submit ) )
		{
			
			$manager_id = $this->post->getValue( 'manager', 'number', 0 );
			$address_id = $this->post->getValue( 'address', 'number', 0 );

			if($manager_id && $address_id)
			{
				$stores = $store->updateStoreById( $store_id, $manager_id, $address_id);
				$this->view->assign( 'stores', $stores );	
				header( 'Location: /list-stores' ) ;
			}
		}

		
		$my_store = $store->getStoreById($store_id);

		$this->view->assign( 'my_store', $my_store );		
		$this->view->setView( $this->template );
	}

	/**
	 * Get Store ID from URL
	 */
	protected function getStoreIdByUrl()
	{
		$url = $this->server->getValue( 'REQUEST_URI', 'text');
		$url_explode = explode('/', $url);
		return $url_explode[2];
	}
}




