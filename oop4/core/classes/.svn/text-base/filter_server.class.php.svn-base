<?php 

require_once('/var/www/wc/trainee2013/oop4/core/classes/filter.class.php');

/**
 * Filter of input data of $_SERVER
 */
class FilterServer extends Filter{

	/**
 	 * Save $_SERVER in variable and remove it from $_SERVER
 	 */
	public function __construct(){	
		if(isset($_SERVER))
		{
			$this->input = $_SERVER;
			unset( $_SERVER );
		}	
		
	}
}

