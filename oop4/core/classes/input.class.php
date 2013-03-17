<?php

require_once(_PATH_CORE_ . 'classes/inputdecorator.class.php');

/**
 * Represent all classes which are decorator
 */
abstract class Input extends InputDecorator
{
	/**
	 * Store value of input
	 * @var string $value
	 */
	protected $value;

	/**
	 * Store name of input
	 * @var string $name
	 */
	protected $name;

	/**
	 * Set value of input
	 * @param mixed $value
	 */
	public function setValue( $value )
	{
		$this->value = $value;
	}

	/**
	 * Set name of input
	 * @param string $name 
	 */
	public function setName( $name )
	{
		$this->name = $name;
	}

	/**
	 * Get value of input
	 * @return mixed 
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * Get name of input
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Print input text type
	 */
	public function render()
	{
		$input =<<<HTML
		<input type="text" name="$this->name" value="$this->value" />
HTML;

		echo $input;
	}

}