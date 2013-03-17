<?php

require_once( _PATH_APP_ . 'classes/controller.class.php');
require_once( _PATH_CORE_ . 'classes/file.class.php');
require_once( _PATH_APP_ . 'classes/imagic_adapter.class.php');

/**
 * Manage Update process
 */
class StaffUpdateController extends SharedFirstlevelController
{

	protected $template = 'staff/update';
	/**
	* Update process of  staff's data
	*/
	public function run()
	{
		
		$staff_id 	= $this->getStaffIdByUrl();		
		$submit 	= $this->post->getValue( 'submit', 'text' );

		$staff= Factorymodel::getClass( 'StaffStaffModel' );
		$staff->setCache( new MemcachedCache );

		if( !empty( $submit ) )		
		{			

			$first_name = $this->post->getValue( 'first_name', 	'text' );
			$last_name 	= $this->post->getValue( 'last_name', 	'text' );
			$address_id = $this->post->getValue( 'address_id', 	'number' );
			$email 		= $this->post->getValue( 'email', 		'text', '' );
			$store_id	= $this->post->getValue( 'store_id', 	'number' );
			$active 	= $this->post->getValue( 'active', 		'number', 1);
			$username 	= $this->post->getValue( 'username', 	'text' );		

			$avatar_name = $this->getAvatar();
			
			if(	$first_name 
				&& $last_name && $address_id 
				&& $email && $store_id 
				&& $active && $username)
			{
			
				$staff->updateStaffById( 	$first_name,
											$last_name,
											$address_id,
											$avatar_name,
											$email,
											$store_id,
											$active,
											$username,
											$staff_id);

				$this->cache->delete( 'getStaffs' );
				$this->cache->delete( 'getStaffByUsername'.$username );
				
				header( 'Location: /list-staff' );
			}
			
		}

		
		$my_staff = $staff->getStaffById( $staff_id );
	
		$this->view->assign( 'my_staff', $my_staff );		
		$this->view->setView( $this->template );
	}

	/**
	 * Get store_id from URL
	 * @return int staff_id 
	 */
	protected function getStaffIdByUrl()
	{
		$url = $this->server->getValue( 'REQUEST_URI', 'text');
		$url_explode = explode('/', $url);
		return $url_explode[2];
	}

	/**
	 * Get Avatar's data from form and generate Avatar
	 *	@return string avatar_name
	 */
	protected function getAvatar()
	{
		$file 				= $this->files->getValues();
		$avatar_name 		= $file['file']['name'];
		$avatar_tmp_name 	= $file['file']['tmp_name'];
		$type 				= $file['file']['type'];
		
		if(  $avatar_name !== '' && $type  == 'image/jpeg')
		{
			$file 				= new File;
			$image_magic 		= new ImagicAdapter( $file, $avatar_tmp_name );
			$avatar 			= new StaffAvatarModel( $image_magic );

			$avatar_name 		= $avatar->getFinalName( $avatar_name );				
			$avatar_directory 	= $avatar->getPath( $avatar_name );
			$final_path 		= $this->server->getValue('DOCUMENT_ROOT', 'text') 
								. $avatar_directory 
								. $avatar_name;

			$avatar->generateThumbnail( $avatar_tmp_name, 
										$final_path, 
										$avatar_directory );
		}

		return $avatar_name;
			
	}


}




