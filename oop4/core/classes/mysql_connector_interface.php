<?php

/**
* This interface force implemnt methods for connector objects.
*/
interface MysqlConnectorInterface
{
	public function connect();
	public function prepare( $string );
	public function bindParam( $paramater, $variable, $data_type );
	public function execute();	
}

?>