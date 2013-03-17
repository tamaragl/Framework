
<?php

require_once(_PATH_APP_ . 'classes/model.class.php');
/**
*This class represent a Store table of database
*@author Tamara García
*/
class StoreModel extends Model
{
	/**
	*Get all stores of the table
	*/
	public function getStores()
	{
		$this->connectDataBase();
		$this->db->prepare( 'SELECT * FROM store');
		$this->db->execute();	
		return $this->db->fetchAll();
	}

	/**
	*Get a store with determined id
	*@param int $store id is a id of store
	*/
	public function getStoreById( $store_id )
	{
		$this->connectDataBase();
		$this->db->prepare('SELECT * FROM store WHERE store_id = :store_id');
		$this->db->bindParam( ':store_id', $store_id, PDO::PARAM_INT);
		$this->db->execute();
		return $this->db->fetchAll();
	}

	/**
	*Insert new store 
	*@param int $manager_id is a staff id
	*@param int $address_id is a address id
	*/
	public function setStore( $manager_id, $address_id )
	{
		$this->connectDataBase();
		$this->db->prepare( 
				'INSERT INTO store (manager_staff_id, address_id)
				VALUES (:manager_id, :address_id)');

		$this->db->bindParam( ':manager_id', $manager_id, PDO::PARAM_INT);
		$this->db->bindParam( ':address_id', $address_id, PDO::PARAM_INT);
		$this->db->execute();

	}

	/**
	 * Update data of store with a determined id
	 * @param int $store_id is store id
	 * @param int $manager_staff_id is id of staff
	 * @param int $address_id is a adresss id
	 */
	public function updateStoreById( $store_id, $manager_staff_id, $address_id )
	{
		$this->connectDataBase();
		$this->db->prepare( 
					'UPDATE store 
					SET manager_staff_id = :manager_staff_id,
						address_id = :address_id
					WHERE store_id = :store_id');
		
		$this->db->bindParam( ':manager_staff_id', $manager_staff_id, PDO::PARAM_INT);
		$this->db->bindParam( ':address_id', $address_id, PDO::PARAM_INT);
		$this->db->bindParam( ':store_id', $store_id, PDO::PARAM_INT);
		$this->db->execute();		
	}

	/**
	 * Delete a Store with determined store id
	 * @param int $store_id is store id
	 */
	public function deleteStoreById( $store_id )
	{
		$this->connectDataBase();
		$this->db->prepare('DELETE FROM store WHERE store_id = :store_id');
		$this->db->bindParam( ':store_id', $store_id, PDO::PARAM_INT);
		$this->db->execute();
	}

}

?>