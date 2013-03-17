<?php 
require_once('/var/www/wc/trainee2013/oop4/core/classes/filter.class.php');

/**
 * Filter of input data of $_GET
 */
class FilterGet extends Filter{

	/**
 	 * Save $_GET in variable and remove it from $_GET
 	 */
	public function __construct()
	{
		$this->input = $_GET;
		unset($_GET);
	}
}

