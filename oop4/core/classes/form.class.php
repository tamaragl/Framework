<?php

class HtmlForm implements IteratorAggregate
{
	/**
	 * List of input's form
	 * @var array $list_inputs
	 */
	protected $list_inputs = array();

	/**
	 * Action of form
	 * @var string $action
	 */
	protected $action;

	/**
	 * Method of form
	 * @var string $method
	 */
	protected $method;

	/**
	 * Set a variables about attributs of form
	 * @param string $action
	 * @param string $method
	 */
	public function __construct( $action, $method )
	{
		$this->action =	$action;
		$this->method =	$method;
	}

	/**
	 * Add inputs of text type in form
	 * @param InputInterface $input
	 */
	public function addInput( InputInterface $input )
	{
		$this->list_inputs[] = $input;
	}

	/**
	 * Validate is all components of form are valid
	 * @return boolean $is_valid
	 */
	public function valid()
	{
		$is_valid = true;

		foreach ($this->list_inputs as $input) 
		{
			if( !$input->valid())
			{
				$is_valid = false;
			}	
		}
		return $is_valid;
	}

	/**
	 * Print html of form
	 */
	public function render()
	{
		$inputs_html = '';
		foreach ($this->list_inputs as $input) 
		{
			$inputs_html .= $input->render();	
		}

		$html = <<<HTML

<form action="$this->action" method="$this->method">
		$inputs_html
	<input type="submit" name="submit"/>
</form>
HTML;

	echo $html;

	}


	/**
	 * Implements iterator agregate
	 * @return array 
	 */
	public function getIterator()
	{
		return new ArrayIterator( $this->list_inputs );
	}


}