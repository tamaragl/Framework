<?php

require_once(_PATH_CORE_ . '/classes/cache_interface.class.php');

/**
 * Strategy of APC (Alternative PHP Cache) 
 */
class APCCache implements CaheInterface
{
	/**
	 * Cache a new variable in the data store
	 * @param string $key  a key name  
	 * @param mixed $value value to store
	 */
	public function add( $key , $value )
	{
		return apc_add($key, $value);
	}

	/**
	 * Removes a stored variable from the cache
	 * @param  string $key a key name
	 */
	public function delete( $key )
	{
		return apc_delete($key);
	}

	/**
	 * Checks if Cache key exists
	 * @param  string $key a key name
	 * @return boolean   
	 */
	public function exists( $key )
	{
		return apc_exists($key);
	}


	/**
	 * Fetch a stored variable from the cache
	 * @param  string $key a name key
	 * @return mixed      
	 */
	public function fetch( $key )
	{
		return apc_fetch($key);
	}

	/**
	 * Cache a variable in the data store
	 * @param  string $key   a key name
	 * @param  mixed $value data stored in cache
	 */
	public function store( $key, $value, $ttl )
	{
		return apc_store($key, $value, $ttl);
	}
}