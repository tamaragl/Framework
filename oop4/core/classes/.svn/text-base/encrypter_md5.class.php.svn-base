<?php 
require_once('encrypter_interface.class.php');

/**
 * Encrypt string using md5 function
 */
class EncrypterMD5 implements EncrypterInterface {
	
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
		$this->salt = md5( mt_rand() );
	}

	/**
	 * Encrypt a password 
	 * @param string $password
	 */
	public function encrypt( $password )
	{		
		return  md5( $password . $this->salt ) . ':' . $this->salt;
	}
}

