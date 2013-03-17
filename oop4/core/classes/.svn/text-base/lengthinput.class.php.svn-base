<?php

require_once(_PATH_CORE_ . 'classes/input.class.php');
require_once(_PATH_CORE_ . 'classes/input_interface.class.php');

class LengthInput extends Input implements InputInterface
{
	/**
	 * Store a max leght of input's value
	 */
	protected $max_length;

	/**
	 * Validate  textinput and legth of value
	 * @return boolean
	 */
	public function valid()
	{
		return $this->textinput->valid() && $this->isValidLength();
	}
	
	/**
	 * Validate has a validate legth
	 * @return boolean
	 */
	public function isValidLength()
	{
		return ( strlen( $this->value ) < $this->max_length) ? true : false;
	}

	/**
	 * Set a value to max length
	 * @param int $legth is a max length of input's value
	 */
	public function setLength( $length )
	{
		$this->max_length = $length;
	}

}