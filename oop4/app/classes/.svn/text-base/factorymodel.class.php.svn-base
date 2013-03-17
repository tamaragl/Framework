<?php

require_once ('/var/www/wc/trainee2013/oop4/core/classes/pdo_connector.class.php' );
require_once ('/var/www/wc/trainee2013/oop4/core/classes/encrypter_md5.class.php' );
require_once ('/var/www/wc/trainee2013/oop4/core/classes/encrypter.class.php' );

/**
 * Factory of model's objects 
 */
class Factorymodel
{
	/**
	 * Create a instance of controller
	 * @param string $class_name, name of model's class.
	 * @return object of controller
	 */
	public static function getClass( $class_name )
	{	
		$db = new PDOConnector( 'localhost', 'root', 'softonic', 'sakila' );	

		switch ( $class_name ) 
		{
			case 'StaffStaffModel':

				$md5 			= new EncrypterMD5();
				$myEncrypter 	= new Encrypter();

				$myEncrypter->setEncryptionMethod( $md5 );

				return new $class_name ( $db, $myEncrypter );

				break;
			
			default:	
							
				return new $class_name ( $db );
				break;
		}
		
	}
	
}