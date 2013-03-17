<?php 

require_once('/var/www/wc/trainee2013/oop4/core/classes/filter.class.php');

/**
 * Filter of input data of $_POST
 */
class FilterPost extends Filter{

	/**
 	 * Save $_POST in variable and remove it from $_POST
 	 */
	public function __construct(){
		$this->input = $_POST;
		unset($_POST);
	}
}

