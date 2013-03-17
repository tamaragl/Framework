<?php 

/**
 * Interface with methods to manage sessions and cookies
 */
interface SessionInterface
{
	/**
	 * Return the value of the given key from the cookie or session object, 
	 * or the default if it's not set.
	 * @param string $key
	 * @param string $deafult default value
	 */
	public function get( $key, $default );

	/**
	 * Set value in the given key
	 * @param string $key
	 * @param string $value
	 */
	public function set( $key, $value );

	/**
	 * Destroys the current information
	 */
	public function destroy();
}