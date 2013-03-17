<?php

interface CaheInterface
{
	
	/**
	 * Removes a stored variable from the cache
	 * @param  string $key a key name
	 */
	public function delete( $key );
	

	/**
	 * Fetch a stored variable from the cache
	 * @param  string $key a name key
	 * @return mixed      
	 */
	public function fetch( $key );

	/**
	 * Cache a variable in the data store
	 * @param  string $key   a key name
	 * @param  mixed $value data stored in cache
	 */
	public function store( $key, $value, $ttl );

	/**
	 * Checks if Cache key exists
	 * @param  string $key   a key name
	 * @return  boolean
	 */
	public function exists( $key );
}	
