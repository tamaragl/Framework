<?php 
require_once('session_interface.class.php');

class Session implements SessionInterface
{
	/**
	 * Store values of $_Session
	 */
	public $session = '';

	/**
 	 * Store $_Session in variable and delete values of $_Session
	 */
	public function __construct()
	{
		session_start();
		$this->session = $_SESSION;
		$_SESSION = array();
	}

	public function __destruct()
	{
		foreach ( $this->session as $key => $value) {
			$_SESSION[$key] = $value;
		}		
	}

	/**
	 * Return the value of the given key from the Session or session object, 
	 * or the default if it's not set.
	 * @param string $key
	 * @param string $deafult default value
	 */
	public function get( $key, $default )
	{
		if( array_key_exists( $key, $this->session ) )
		{
			return $this->session[$key];
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
		//$this->session[$key] = $value;
		$_SESSION[$key] = $value;
	}

	/**
	 * Destroys the current information
	 */
	public function destroy()
	{
		unset( $this->session );
		
	}
}