<?php

require_once(_PATH_CORE_ . 'classes/input.class.php');
require_once(_PATH_CORE_ . 'classes/input_interface.class.php');

class NumericInput extends Input implements InputInterface
{

	/**
	 * Validate  textinput and and is a numeric value
	 * @return boolean
	 */
	public function valid()
	{
		return $this->textinput->valid() && $this->isValidNumeric();
	}

	/**
	 * Validate if is a numeric value
	 * @return boolean
	 */
	public function isValidNumeric()
	{
		return is_numeric( $this->value);
	}

}