<?php

require_once('/var/www/wc/trainee2013/oop4/core/classes/mysql_connector_interface.php');

/**
 * This class is a bundle to PDO Connector 
 * @author Tamara García
 */
class PDOConnector implements MysqlConnectorInterface 
{
	protected $host 		= '';
	protected $username 	= '';
	protected $password		= '';
	protected $bd 			= '';
	protected $connector 	= '';
	public $statement	= '';

	public function __construct( $host, $username, $password, $bd )
	{
		$this->host 	= $host;
		$this->username = $username;
		$this->password = $password;
		$this->bd 		= $bd;
	}
	
	/**
	 * Create a instance of connector with a goal of establish
	 * connection with database
	 * @param string $host is hostname
	 * @param string $username  is username of database
	 * @param string $password is a password of database
	 * @param string $bd is a name of database
	 */
	public function connect()
	{
		$dsn = "mysql:host=".$this->host.";dbname=".$this->bd;
		
		$this->connector =  new PDO(	$dsn,
										$this->username,
										$this->password);
	}


	/**
	 * Is a bundle of method binParam of connectors that binds a 
	 * parameter to specified varible name
	 * @param string $statement is a query string in string format
	 * @param string $parameter text represents a variable value
	 * @param mixed $variable is value represented by $parameter
	 * @param string $data_type specified type data of $variable
	 */
	public function bindParam( $paramater, $variable, $data_type )
	{
		$this->statement->bindParam( $paramater, $variable, $data_type );
	}

	/**
	 * Is a bundle of method that prepare the query for execution
	 * @param string $statement is a query string in string format
	 * @return statement object
	 */
	public function prepare( $string ) 
	{
		$this->statement = $this->connector->prepare( $string );
	}

	/**
	 * Is a bundle of method that execute the prepare statement
	 * @param string $statement is a query string in string format
	 * @return true or false if it's works
	 */
	public function execute()
	{
		
		$then = microtime();	
		return $this->statement->execute();
		$now = microtime();	

		$error = $this->statement->errorInfo();

    	if ( !empty( $error[1] ) )
		{
	      throw new RuntimeException( $error[2], $error[1] );
	    }
		
		}

	/**
	 * Is a bundle of method that return all resulset of query
	 * @param string $statement is a query string in string format
	 * @return array with all data of resulset of query
	 */
	public function fetchAll ()
	{		
		return $this->statement->fetchAll();
	}
}

?>