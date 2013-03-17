<?php

/**
* This class build a debug 
*/
class Debug{
	
	/**
	 * Save a instance of class
	 * @var object $instance
	 */
	private static $instance = null;
	
	/**
	 * Collected a data of $_GET
	 * @var array $get
	 */
	protected $get = array();
	
	/**
	 * Status of debug
	 * @var bool $status
	 */
	protected $status;

	/**
	 * Store values of cache
	 * @var array
	 */
	protected $cache_values = array();

	/**
	 * Store values assigned in templates
	 * @var array
	 */
	protected $template_values = array();

	
	/**
	 * Build a instance of class and return it
	 * @return a object of class
	 */
	public static function getInstance()
	{
		if( null === self::$instance )
		{
			self::$instance = new self;
		}
		
		return self::$instance;		
	}

	/**
	 * Disallow function __clone
	 */
	private function __clone()
	{
			
	}

	/**
	 * Get value of mode debug in query string
	 */
	public function setStatus( $status )
	{
		return $this->status = $status;
	}

	/**
	 * Set Variables of templates
	 * @param string $key is a key of array
	 * @param mixed $value is a value of array
	 */
	public function setTemplatesVariables( $key, $value )
	{		
		$this->template_values[ $key ] = $value;
	}

	/**
	 * Set values stored in cache 
	 */
	public function setCacheValues( $key, $value )
	{
		$this->cache_values[ $key ] = $value;
	}

	/**
	 * Remove Cache values in debug
	 * @return boolean
	 */
	public function removeCacheValues()
	{
		return $this->cache_values = array();
	}

	/**
	 * Print a debug 
	 */
	public function showDebug()
	{

		if( $this->status )
		{
			if( !empty( $this->template_values ) )
			{
				echo '<br><b>Cache values:</b>';
				var_dump( $this->cache_values );

				echo '<br><b>Template values:</b>';	
				var_dump( $this->template_values );								
			}
		}
	}
}