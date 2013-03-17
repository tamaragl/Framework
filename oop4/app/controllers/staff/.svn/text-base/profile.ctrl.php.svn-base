<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');
require_once(_PATH_CORE_ . 'classes/file.class.php');
require_once( _PATH_APP_ . 'classes/imagic_adapter.class.php');

/**
 * Show a profile of staff
 */
class StaffProfileController extends Controller
{
	/**
	 * Store template of controller
	 * @var string
	 */
	protected $template = 'staff/profile';


	/**
	 * Manage data to show a profile page 
	 */
	public function build()
	{
		
		$params = $this->getParams();
		$username = $params['username'];	

		$staff = Factorymodel::getClass( 'StaffStaffModel' );
		$staff->setCache( $this->cache );

		$staff_info = $staff->getStaffByUsername( $username );

		$file 			= new File;
		$image_magic 	= new ImagicAdapter( $file );
		$avatar 		= new StaffAvatarModel( $image_magic );	

		$avatar_file = $avatar->getImagePath($staff_info[0]['avatar']);


		$repositories = $this->getRepositories( $username );


		$this->view->assign( 'repositories', $repositories);
		$this->view->assign( 'avatar', $avatar_file);
		$this->view->assign( 'staff_info', $staff_info );
		$this->view->setView( $this->template );
	}

	
	/**
	 * Get GitHub repositories from user 
	 * @param  string $username
	 * @return array array with repositories of user
	 */
	protected function getRepositories( $username )
	{		
		$user_repositories = array();
		
		if( $this->cache->exists('github_repositories_'.$username ) )
		{			
			$user_repositories = $this->cache->fetch( 'github_repositories_'. $username );	
		}
		else
		{			
			$response = file_get_contents('https://api.github.com/users/'.$username.'/repos');	

			$repositories = json_decode($response, true);
		
			foreach ($repositories as $key => $repositori) 
			{				
				$user_repositories[ $key ]['name'] 	= $repositori['name'];
				$user_repositories[ $key ]['url'] 	= $repositori['url'];
			}
			
			$this->cache->store('github_repositories_'.$username, $user_repositories);		
		}	

		return $user_repositories;
	}

}