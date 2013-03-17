<?php

require_once(_PATH_APP_ . 'classes/model.class.php');

/**
* This class represent a Address table of database
* @author Tamara García
*/
class Address extends Model
{
	/**
	* Get Address by address_id
	* @param int $id represents address_id
	*/
	public function getAddressById( $id ){

		$statement = $this->db->prepare( 'SELECT * FROM address WHERE address_id = :address_id' );
		$this->db->bindParam( $statement, ':address_id', $id, PDO::PARAM_INT);
		$this->db->execute( $statement );
		return $this->db->fetchAll( $statement );
	}

}

?>