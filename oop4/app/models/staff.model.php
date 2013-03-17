<?php 

require_once(_PATH_APP_ . 'classes/model.class.php');

/**
*This class represent a Staff table of database
*@author Tamara García
*/
class StaffModel extends Model
{
	/**
	 * Get people staff of the table
	 */
	public function getStaffs()
	{
		$this->connectDataBase();
		$query = <<<SQL
SELECT 
	staff_id,
	first_name,
	last_name,
	address_id,
	avatar,
	email,
	store_id,
	active,
	username
FROM 
	staff
SQL;

		$this->db->prepare( $query );
		$this->db->execute();	
		return $this->db->fetchAll();
	}

	/**
	 * Get a staff with determined id
	 * @param int $staff_id is a id of staff
	 */
	public function getStaffById( $staff_id )
	{

		$this->connectDataBase();
		$query =<<<SQL
SELECT	
	staff_id,
	first_name,
	last_name,
	address_id,
	avatar,
	email,
	store_id,
	active,
	username
FROM 
	staff
WHERE 
	staff_id = :staff_id
SQL;

		$this->db->prepare( $query );
		$this->db->bindParam( ':staff_id', $staff_id, PDO::PARAM_INT);
		$this->db->execute();
		return $this->db->fetchAll();
	}

	
	/**
	 * Update data of staff with a determined id
	 * @param int $store_id is store id
	 * @param int $manager_staff_id is id of staff
	 * @param int $address_id is a adresss id
	 */
	public function updateStaffById( $first_name, $last_name, $address_id, $avatar, $email, 
										$store_id, $active, $username, $staff_id)
	{
		
		$this->connectDataBase();

		$query = <<<SQL
UPDATE staff 
SET 
	first_name 	= :first_name,
	last_name 	= :last_name,
	address_id 	= :address_id,
	avatar		= :avatar,
	email 		= :email,
	store_id 	= :store_id,
	active 		= :active,
	username 	= :username
WHERE staff_id 	= :staff_id
SQL;


		$this->db->prepare( $query );	

		$this->db->bindParam( ':first_name', $first_name, PDO::PARAM_INT);
		$this->db->bindParam( ':last_name', $last_name, PDO::PARAM_STR);
		$this->db->bindParam( ':address_id', $address_id, PDO::PARAM_STR);
		$this->db->bindParam( ':avatar', $avatar, PDO::PARAM_STR);
		$this->db->bindParam( ':email', $email, PDO::PARAM_STR);
		$this->db->bindParam( ':store_id', $store_id, PDO::PARAM_INT);
		$this->db->bindParam( ':active', $active, PDO::PARAM_INT);
		$this->db->bindParam( ':username', $username, PDO::PARAM_STR);
		$this->db->bindParam( ':staff_id', $staff_id, PDO::PARAM_INT);
		$this->db->execute();	
		
	}


	/**
	 * Delete a Staff with determined staff id
	 * @param int $store_id is store id
	 */
	public function deleteStaffById( $staff_id )
	{

		$this->connectDataBase();
		$query =<<<SQL
DELETE FROM 
	staff 
WHERE staff_id = :staff_id
SQL;
		
		$this->db->prepare( $query );
		$this->db->bindParam( ':staff_id', $staff_id, PDO::PARAM_INT);
		$this->db->execute();

	}

	/**
	 * Insert new store 
	 * @param int $manager_id is a staff id
	 * @param int $address_id is a address id
	 */
	public function setStaff( 	$first_name,
								$last_name,
								$address_id,
								$avatar,
								$email,
								$store_id,
								$active,
								$username,
								$staff_id )
	{
		$this->connectDataBase();

		$query =<<<SQL
INSERT INTO
	staff ( first_name,
			last_name,
			address_id,
			avatar,
			email,
			store_id,
			active,
			username )

VALUES (	:first_name,
			:last_name,
			:address_id,
			:avatar,
			:email,
			:store_id,
			:active,
			:username)
SQL;
		$this->db->prepare( $query );

		$this->db->bindParam( ':first_name', $first_name, PDO::PARAM_STR);
		$this->db->bindParam( ':last_name', $last_name, PDO::PARAM_STR);
		$this->db->bindParam( ':address_id', $address_id, PDO::PARAM_INT);
		$this->db->bindParam( ':avatar', $avatar, PDO::PARAM_STR);
		$this->db->bindParam( ':email', $email, PDO::PARAM_STR);
		$this->db->bindParam( ':store_id', $store_id, PDO::PARAM_INT);
		$this->db->bindParam( ':active', $active, PDO::PARAM_INT);
		$this->db->bindParam( ':username', $username, PDO::PARAM_STR);
		$this->db->execute();

	}

	/**
	 * Get a staff with determined username
	 * @param string $username is a id of staff
	 */
	public function getStaffByUsername( $username )
	{

		$this->connectDataBase();
		$query =<<<SQL
SELECT	
	staff_id,
	first_name,
	last_name,
	address_id,
	avatar,
	email,
	store_id,
	active,
	username
FROM 
	staff
WHERE 
	username = :username
ORDER BY
	staff_id DESC
LIMIT 1
SQL;

		$this->db->prepare( $query );
		$this->db->bindParam( ':username', $username, PDO::PARAM_STR);
		$this->db->execute();
		return $this->db->fetchAll();
	}


	

}

