<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Manage data to delete store
 */
class StoreDeleteController extends Controller
{
	/**
	 * Set form template and manage data to delete a store
	 */	
	public function build()
	{	
		$submit 	= $this->post->getValue( 'delete', 'text' );
		$store_id	= $this->post->getValue( 'store_id', 'text' );		
		$store = Factorymodel::getClass( 'StoreStoreModel' );

		if( isset( $submit ) )
		{
			if($store_id)
			{
				$store->deleteStoreById( $store_id );				
			}

			header( 'Location: /list-stores' ) ;
		}

		
		$stores = $store->getStores();
	}
}

