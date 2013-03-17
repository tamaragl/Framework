<?php

/**
 * Interface to encrypters
 */	
interface EncrypterInterface
{

	/**
	 * Set a string to use like a salt
	 */
	public function setSalt();

	/**
	 * Encrypt a password 
	 */
	public function encrypt( $password );
}


