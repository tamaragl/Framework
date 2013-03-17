<?php

/**
 * Set a type of encrypter	
 */
class Encrypter{

	/**
	 * Get a instace of encrypter
	 */
	public $myEncripter = '';

	/**
	 * Set a encryption method
	 */
	public function setEncryptionMethod( EncrypterInterface $iEncrypter )
	{
		return $this->myEncripter = new $iEncrypter();
	}

	/**
	 * Encrypt a string with our mehtod of encryption
	 * @param string $password
	 */
	public function encrypt( $password )
	{
		return $this->myEncripter->encrypt($password);
	}	

	/**
	 * Set a string random with our method of encryptrion
	 */
	public function setSalt()
	{
		$this->myEncripter->setSalt();
	}

}

