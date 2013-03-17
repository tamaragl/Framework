<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');
require_once(_PATH_CORE_ . 'classes/file.class.php');
require_once( _PATH_APP_ . 'classes/imagic_adapter.class.php');
require_once(_PATH_CORE_ . 'classes/session.class.php');
require_once(_PATH_CORE_ . 'classes/memcached.class.php');

/**
 * Show list of staff people
 */
class StaffListController extends SharedFirstlevelController
{

	protected $template = 'staff/list';	
	/**
	 * Manage data to show a list of staff people
	 */
	public function run()
	{	
			
		/*$etag_hash = md5($this->server->getValue('REQUEST_URI', 'text'));	
		$if_none_match = $this->server->getValue('HTTP_IF_NONE_MATCH', 'text');

		if( $if_none_match )
		{
			header('HTTP/1.1 304 Not Modified');			
		}
		else
		{
			header('ETag: ' . $etag_hash);
		}*/



		//$staffs = $this->getData('StaffStaffModel', 'getStaffs', array() );

		$staff = Factorymodel::getClass( 'StaffStaffModel');
		$staff->setCache( $this->cache );
		$staffs = $staff->getStaffs();
		
		
		$file 			= new File;
		$image_magic 	= new ImagicAdapter( $file );
		$avatar 		= new StaffAvatarModel( $image_magic );	

		foreach ( $staffs as $key => $staff ) 
		{						 
			$staffs[$key]['avatar'] = $avatar->getImagePath( $staff['avatar'] );
		}	


		$paginator = Factorycontroller::getClass( 'SharedPaginatorController', false, new View );


		$this->view->assign( 'staffs', $staffs );
		$this->view->assign( 'login', $this->session->get('login', '') );
		
		$this->view->setView( $this->template );
		
	}


}