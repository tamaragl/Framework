<?php

require_once("input_interface.class.php");

/**
 * Represent a input text type
 */
class TextInput implements InputInterface
{
	/**
	 * Validate content of input
	 */
	public function valid()
	{
		return true;
	}
}