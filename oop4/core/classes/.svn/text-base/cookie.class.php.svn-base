<?php 
require_once('session_interface.class.php');

class Cookie implements SessionInterface
{
	/**
	 * Store values of $_COOKIE
	 */
	public $cookie = '';

	/**
 	 * Store $_COOKIE in variable and delete values of $_COOKIE
	 */
	public function __construct()
	{
		$this->cookie = $_COOKIE;
		$_COOKIE = array();
	}

	/**
	 * Return the value of the given key from the cookie or session object, 
	 * or the default if it's not set.
	 * @param string $key
	 * @param string $deafult default value
	 */
	public function get( $key, $default )
	{
		if( array_key_exists( $key, $this->cookie ) )
		{
			return $this->cookie[$key];
		}
		else
		{
			return $default;
		}
		
	}

	/**
	 * Set value in the given key
	 * @param string $key
	 * @param string $value
	 */
	public function set( $key, $value )
	{
		setcookie($key, $value, time()+3600);

	}

	/**
	 * Destroys the current information
	 */
	public function destroy()
	{
		foreach ($this->cookie as $key => $value) {
			setcookie($key, '', -1);
		}

	}
}