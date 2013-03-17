<?php

require_once(_PATH_CORE_ . '/classes/cache_interface.class.php');

/**
 * Strategy of APC (Alternative PHP Cache) 
 */
class MemcachedCache implements CaheInterface
{

	protected $cache;
	

	public function __construct( $get )
	{
		
		$this->cache = new Memcached();
		$this->cache->addServer( 'localhost', 11211 );
	}

	

	/**
	 * If status equals 1 the cache is disabled
	 * @return booleand
	 */
	public function rebuild()
	{
		if( $this->isDisabled() )
		{
			return $this->flush();
		}
	}
	
	/**
	 * Removes a stored variable from the cache
	 * @param  string $key a key name
	 */
	public function delete( $key )
	{
		return $this->cache->delete( $key );
	}
	
	/**
	 * Fetch a stored variable from the cache
	 * @param  string $key a name key
	 * @return mixed      
	 */
	public function fetch( $key )
	{
		return $this->cache->get( $key );  
	}

	/**
	 * Cache a variable in the data store
	 * @param  string $key   a key name
	 * @param  mixed $value data stored in cache
	 */
	public function store( $key, $value, $ttl )
	{
		Debug::getInstance();
  		Debug::getInstance()->setCacheValues( $key, $value );

		return $this->cache->set( $key, $value, $ttl );
	}


	/**
	 * Checks if Cache key exists
	 * @param  string $key a key name
	 * @return boolean   
	 */
	public function exists( $key )
	{
		return  $this->cache->get( $key );
	}

	/**
	 * Clean all values of server from cache
	 * @return  boolean return a true if is success
	 */
	public function flush()
	{		
		Debug::getInstance();
  		Debug::getInstance()->removeCacheValues();
		return $this->cache->flush();
	}

}