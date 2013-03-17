<?php

/**
* This class represent a View Layer of pattern MVC
*/
class View
{
	/**
	 * Collected all variables assign in HTML (view).
	 * @var array $template_values
	 */
	protected $template_values = array();

	/**
	 * Is dinamyc path of view file
	 * @var string $path
	 */
	protected $path = '';

	/**
	 * Store template engine
	 */
	protected $template;


	public function __construct( $twig )
	{		

		$this->template = $twig;
	}

	/**
	 * Assign variables in array to after used it in view
	 * @param string $key
	 * @param mixed $value
	 */
	public function assign( $key, $value )
	{

		$this->template_values[$key] = $value;

		Debug::getInstance();
		Debug::getInstance()->setTemplatesVariables( $key, $value );
	}

	/**
	 * Do include a view file
	 */
	public function render()
	{
		return $this->template->render( $this->path, $this->template_values );
	}


	public function display()
	{
		$this->template->display( $this->path, $this->template_values );
	}

	/**
	 * Set name view file
	 * @param string $path
	 */
	public function setView( $path )
	{
		$this->path  = $path . '.tpl';
	}

	/**
	 * For reading variables assigned in view
	 * @param  string $key
	 */
	public function __get( $key )
	{
		return $this->template_values[$key];
	}	

}