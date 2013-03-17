<?php 
require_once('encrypter_interface.class.php');

/**
 * Encrypt string using sha1 function
 */
class EncrypterSHA1 implements EncrypterInterface{

	/**
	 * Random string 
	 * @var string $salt 
	 */
	public $salt = '';	

	/**
	 * Set a string to use like a salt
	 */
	public function setSalt()
	{		
		$this->salt = sha1( mt_rand() );
	}

	/**
	 * Encrypt a password 
	 * @param string $password
	 */
	public function encrypt( $password )
	{		
		return  sha1( $password . $this->salt ) . ':' . $this->salt;
	}
}


