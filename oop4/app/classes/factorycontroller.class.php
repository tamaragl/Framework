<?php

/**
 * Factory of controller's objects 
 */
class Factorycontroller
{
	/**
	 * Create a instance of controller
	 * @param string $class_name, name of controller's class.
	 * @return object of controller
	 */
	public static function getClass( $class_name, $subject = false, $view, $cache )
	{
		return new $class_name( $subject, $view, $cache );
	}
}