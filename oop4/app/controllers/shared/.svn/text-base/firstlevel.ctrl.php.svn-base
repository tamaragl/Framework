<?php
require_once(_PATH_CORE_ . 'classes/session.class.php');


/**
 * Manage if user has permission to acces certain pages	
 */
class SharedFirstlevelController extends Controller
{

	

	public function __construct( $subject, $view, $cache )
	{
		parent::__construct( $subject, $view, $cache );		
	}

	public function build()
	{
		
		if( $this->session->get('login', '') != '')
		{			
			$this->run();
		}
		else{
			echo 'No tienes permisos!';
		}
	}

	public function run()
	{

	}
	
}