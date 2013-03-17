<?php

require_once(_PATH_CORE_ . 'classes/textinput.class.php');

/**
 * Class to decorate text input
 */
class InputDecorator 
{
	/**
	 * Store textinput object
	 * @var object
	 */
	protected $textinput;

	/**
	 * Set textinput object
	 * @param TextInput $textinput
	 */
	public function __construct( TextInput $textinput )
	{
		$this->textinput = new $textinput;
	}

	


}