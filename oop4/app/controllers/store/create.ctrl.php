<?php 

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Manage data of list store template
 */
class StoreCreateController extends Controller
{	

	protected $template = 'store/create';
	/**
	 * Set form template and manage data to create a new store
	 */
	public function build()
	{
		$submit = $this->post->getValue( 'submit', 'text');

		session_cache_limiter('public');
		header('Pragma: cache');
		header('Cache-control: max-age=30, public');	

		if( !empty( $submit ) )
		{
			
			$store = Factorymodel::getClass( 'StoreStoreModel' );

			$manager_id = $this->post->getValue('manager', 'number', 0);
			$address_id = $this->post->getValue('address', 'number', 0);
			
			if($manager_id && $address_id)
			{
				
				$stores = $store->setStore( $manager_id, $address_id);
				$this->view->assign( 'stores', $stores );
			}
			
			header( 'Location: /list-stores' ) ;
		}

		$this->view->setView( $this->template );
		
	}


}


