<?php 

require_once('/var/www/wc/trainee2013/oop4/app/classes/model.class.php');
require_once('/var/www/wc/trainee2013/oop4/core/classes/encrypter_md5.class.php');
require_once('/var/www/wc/trainee2013/oop4/core/classes/encrypter.class.php');

/**
*This class represent a Staff table of database
*@author Tamara García
*/
class StaffStaffModel extends Model
{
	/**
	 * Get people staff of the table
	 */
	public function getStaffs()
	{

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
		
		
		if( $this->cache->exists( 'getStaffs' ) )
		{		
			
			$result = $this->cache->fetch( 'getStaffs' );
		}
		else
		{			
			
			$this->connectDataBase();
			$this->db->prepare( $query );
			$this->db->execute();		
			$result = $this->db->fetchAll();

			$this->cache->store( 'getStaffs', $result );
		}

		return $result;
		
		
		
	}

	/**
	 * Get a staff with determined id
	 * @param int $staff_id is a id of staff
	 */
	public function getStaffById( $staff_id )
	{
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

		$this->connectDataBase();
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
	 * @param string $avatar
	 * @param string $email
	 * @param int $store_id
	 * @param int $active
	 * @param string $username
	 * @param int $staff_id
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
		return $this->db->execute();	
		
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
		return $this->db->execute();

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
		return $this->db->execute();
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

		if( $this->cache->exists( 'getStaffByUsername'.$username ) )
		{		
			$result = $this->cache->fetch( 'getStaffByUsername'.$username );
		}
		else
		{			
			$this->db->prepare( $query );
			$this->db->bindParam( ':username', $username, PDO::PARAM_STR);
			$this->db->execute();
			$result = $this->db->fetchAll();

			$this->cache->store( 'getStaffByUsername'.$username, $result );
		}

		return $result;


		
	}

	/**
	 * Check if login is correct
	 * @param string $username 
	 * @param string $password
	 * @param boolean 
	 */
	public function validateLogin( $username, $password )
	{
		$this->connectDataBase();
		$query =<<<SQL
SELECT	
	username,
	password
FROM 
	staff
WHERE
	username = :username 
	AND	
	password = :password
LIMIT 1
SQL;

	$this->db->prepare( $query );
	$this->db->bindParam( ':username', $username, PDO::PARAM_STR);
	$this->db->bindParam( ':password', $password, PDO::PARAM_STR);
	$this->db->execute();
	$result = $this->db->fetchAll();
	
	return ( !empty( $result ) ) ? true : false;

	}

	/**
	 * Set a staff with data to do login	  
	 * @param int $store_id is store id
	 * @param int $manager_staff_id is id of staff
	 * @param int $address_id is a adresss id
	 * @param string $avatar
	 * @param string $email
	 * @param int $store_id
	 * @param int $active
	 * @param string $username
	 * @param string $password
	 */
	public function setStaffUser( 	$first_name, $last_name, $address_id, $email, 
									$store_id, $active, $username, $password )
	{
		$this->connectDataBase();

		$query =<<<SQL
INSERT INTO
	staff (
			first_name,
			last_name,
			address_id,
			email,
			store_id,
			active,
			username, 
			password )

VALUES (	
			:first_name,
			:last_name,
			:address_id,
			:email,
			:store_id,
			:active,
			:username,
			:password)
SQL;
		$this->db->prepare( $query );
		
		$this->db->bindParam( ':first_name', 	$first_name, PDO::PARAM_STR);
		$this->db->bindParam( ':last_name', 	$last_name, PDO::PARAM_STR);
		$this->db->bindParam( ':address_id', 	$address_id, PDO::PARAM_INT);
		$this->db->bindParam( ':email', 		$email, PDO::PARAM_STR);
		$this->db->bindParam( ':store_id', 		$store_id, PDO::PARAM_INT);
		$this->db->bindParam( ':active', 		$active, PDO::PARAM_INT);
		$this->db->bindParam( ':username', 		$username, PDO::PARAM_STR);
		$this->db->bindParam( ':password', 		$password, PDO::PARAM_STR);

		return $this->db->execute();
	
	}/**
	 * Cheks if exist an staff email
	 * @param string $email staff's email
	 * @return boolean
	 */
	public function isExistEmail( $email )
	{

		$this->connectDataBase();
		$query =<<<SQL
SELECT	
	email
FROM 
	staff
WHERE
	email = :email 	
LIMIT 1
SQL;

		$this->db->prepare( $query );
		$this->db->bindParam( ':email', $email, PDO::PARAM_STR);
		$this->db->execute();
		$result = $this->db->fetchAll();
		
		return ( !empty( $result ) ) ? true : false;

	}


	/**
	 * Insert a authorization code in table staff_email_code
	 * @param string $email
	 * @param string $code
	 */
	public function setCodeAuth( $email, $code )
	{

		$this->connectDataBase();
		$query =<<<SQL
INSERT INTO	
	staff_email_code
	( email, code_auth )
VALUES 
	( :email, :code )
SQL;

		$this->db->prepare( $query );
		$this->db->bindParam( ':email', $email, PDO::PARAM_STR);
		$this->db->bindParam( ':code', $code, PDO::PARAM_STR);
		return $this->db->execute();
	
	}

	/**
	 * Check if authorization code is valid for email
	 * @param string $email
	 * @param string $code
	 * @return boolean
	 */
	public function isCorrectCodeAuth( $email, $code )
	{
		$this->connectDataBase();
		$query =<<<SQL
SELECT	
	email,
	code_auth
FROM 
	staff_email_code
WHERE
	email = :email 
	AND	
	code_auth = :code
LIMIT 1
SQL;

		$this->db->prepare( $query );
		$this->db->bindParam( ':email', $email, PDO::PARAM_STR);
		$this->db->bindParam( ':code', $code, PDO::PARAM_STR);
		$this->db->execute();
		$result = $this->db->fetchAll();
		
		return ( !empty( $result ) ) ? true : false;
	}

	/**
	 * Update a new password in staff table
	 * @param string $email 
	 * @param string $password
	 */
	public function setPasswordByEmail( $email, $password )
	{
		$this->connectDataBase();
		$query =<<<SQL
UPDATE	
	staff
SET 
	password = :password 
WHERE
	email = :email 
SQL;

				$this->db->prepare( $query );
				$this->db->bindParam( ':email', $email, PDO::PARAM_STR);
				$this->db->bindParam( ':password', $password, PDO::PARAM_STR);
				return $this->db->execute();	
	}


	/**
	 * Encrypt a password 
	 * @param string $password
	 */
	public function encryptPassword( $password )
	{
		return $this->my_encrypter->encrypt( $password );
	}



}


