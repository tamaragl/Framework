<?php

require_once(_PATH_CORE_ . 'classes/input.class.php');
require_once(_PATH_CORE_ . 'classes/input_interface.class.php');

/**
 * Manage inputs of email type
 */
class EmailInput extends Input implements InputInterface
{
	/**
	 * Validate  textinput and email filter
	 * @return boolean
	 */
	public function valid()
	{
		return $this->textinput->valid() && $this->isValidEmail();
	}

	/**
	 * Validate is a correct email
	 * @return boolean
	 */
	public function isValidEmail()
	{
		return filter_var( $this->value, FILTER_VALIDATE_EMAIL );
	}

}