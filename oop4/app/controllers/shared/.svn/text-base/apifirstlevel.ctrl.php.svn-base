<?php
require_once(_PATH_APP_ . 'classes/controller.class.php');


/**
 * Manage if user has permission to acces certain pages	
 */
class SharedApifirstlevelController extends Controller
{

	protected $template  = 'api/api';

	public function build()
	{
		$this->view->setView( $this->template );

		$username = $this->server->getValue( 'HTTP_PHP_AUTH_USER', 'text' );
		$password = $this->encryptPassword( $this->server->getValue( 'HTTP_PHP_AUTH_PW', 'text' ) );
		$staff = Factorymodel::getClass( 'StaffStaffModel');
		

		if( $staff->validateLogin( $username, $password) )
		{		
					
			$this->run();
		}
		else
		{
			$this->addHeader('HTTP/1.1 401 Unauthorized');
		}
	}

	public function run()
	{

	}

	/**
	 * Encrypt a password 
	 * @param string $password
	 */
	public function encryptPassword( $password )
	{
		$md5 			= new EncrypterMD5();
		$myEncrypter 	= new Encrypter();

		$myEncrypter->setEncryptionMethod( $md5 );	
		return $myEncrypter->encrypt( $password );
	}
	
}