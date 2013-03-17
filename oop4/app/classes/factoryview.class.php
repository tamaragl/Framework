<?php

require_once '../../core/libs/Twig/lib/Twig/Autoloader.php';

/**
 * Factory of view's objects 
 */
class FactoryView
{
	/**
	 * Create a instance of view
	 * @param string $class_name, name of view's class.
	 * @return object of view
	 */
	public static function getClass( $class_name )
	{
		Twig_Autoloader::register();

		$loader = new Twig_Loader_Filesystem( _PATH_TPL_ );

		$twig = new Twig_Environment( 	$loader, 
										array(
												'cache' => _PATH_APP_.'cache/',
												'debug' => true
											) 
									);

		$twig->addExtension( new Twig_Extension_Debug() );

		return new $class_name( $twig );
	}
	
}