<?php 
require_once ('/var/www/wc/trainee2013/oop4/core/classes/pdo_connector.class.php' );
require_once (_PATH_CORE_ . '/classes/apc_cache.class.php' );
/**
 * This class create a instance of database 
 * @author Tamara Garcia
 */

abstract class Model
{

	/**
	 * The var manage object of database
	 * @var object of class that represent a database
	 */
	public $db = '';

	/**
	 * Store instance of strategy encrypter
	 * @var object
	 */
	public $my_encrypter;


	/**
	 * Store a cache object
	 * @var object
	 */
	public $cache;
	
	
	public function __construct( PDOConnector $db, $my_encrypter = false)
	{
		$this->db = $db;
		$this->my_encrypter = $my_encrypter;
		
	}

	/**
	 * This method create a connection with database
	 */
	protected function connectDataBase()
	{
		$this->db->connect();
	}

	public function setCache( CaheInterface $cache )
	{	
		$this->cache = $cache;
	}
}

?>