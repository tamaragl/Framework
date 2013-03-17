<?php 
require_once(_PATH_CORE_.'classes/filter.class.php');

/**
 * Filter of input data of $_FILES
 */
class FilterFiles extends Filter{

	/**
 	 * Save $_FILES in variable and remove it from $_FILES
 	 */
	public function __construct(){
		$this->input = $_FILES;
		unset($_FILES);
	}
}

