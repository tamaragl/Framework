<?php 

require_once('/var/www/wc/trainee2013/oop4/app/classes/model.class.php');
require_once('/var/www/wc/trainee2013/oop4/core/classes/encrypter_md5.class.php');
require_once('/var/www/wc/trainee2013/oop4/core/classes/encrypter.class.php');

/**
*This class represent a Staff table of database
*@author Tamara García
*/
class FilmFilmModel extends Model
{
	/**
	 * Get people staff of the table
	 * @return  int quantity of total films in film's table
	 */
	public function countFilms()
	{

		$query = <<<SQL
SELECT 
	COUNT(film_id)	as count_films
FROM 
	film
SQL;
		

			$this->connectDataBase();
			$this->db->prepare( $query );
			$this->db->execute();		
			$result = $this->db->fetchAll();

			return $result;		
		
	}


	/**
	 * Get a range of films
	 * @param  int $page           number of page
	 * @param  int $items_per_page number of films per page
	 * @return array               list of films of page
	 */
	public function getFilmsPerPage( $page, $items_per_page )
	{

		$query = <<<SQL
SELECT 
	film_id,
	title,
	release_year,
	rental_duration
FROM 
	film
LIMIT 
	:page , :items_per_page
SQL;


		
		$cache_key = 'getFilmsPerPagePage' . $page . 'ItemsPerPage' . $items_per_page;

		if( $this->cache->exists( $cache_key ) )
		{	
			$result = $this->cache->fetch( $cache_key );
		}
		else
		{			
			$this->connectDataBase();
			$this->db->prepare( $query );

			$this->db->bindParam( ':page', $page, PDO::PARAM_INT);
			$this->db->bindParam( ':items_per_page', $items_per_page, PDO::PARAM_INT);
			$this->db->execute();		
			$result = $this->db->fetchAll();

			$this->cache->store( $cache_key, $result );
		}

		return $result;
	}

	/**
	 * Get title and description from film
	 * @param  string $title 
	 * @param  string $description 
	 * @return string               [description]
	 */
	public function getFilmsWithTitleAndDescription( $title, $description )
	{
		$query =<<<SQL
SELECT 
	title, description
FROM
	film 
WHERE 
	title LIKE :title
AND 
	description LIKE :description

SQL;

		

		$this->connectDataBase();
		$this->db->prepare( $query );

		$this->db->bindParam( ':title', '%' . $title . '%', PDO::PARAM_STR);
		$this->db->bindParam( ':description', '%' . $description . '%', PDO::PARAM_STR );
		$this->db->execute();		
		$result = $this->db->fetchAll();
		

		return $result;
	}

	/**
	 * Remove a film by title's film
	 * @param  string $film_name title of film
	 * @return boolean  return true if delete is successful	 
	 */
	public function removeFilm( $film_id )
	{
		$query =<<<SQL
DELETE FROM
	film
WHERE 
	film_id = :film_id
SQL;
	
		$this->connectDataBase();
		$this->db->prepare( $query );
		$this->db->bindParam( ':film_id',  $film_id  , PDO::PARAM_INT );		
		$this->db->execute();

	}


	/**
	 * Update a title of film
	 * @param  int $film_id   
	 * @param  string $new_title 
	 * @return boolean 
	 */
	public function updateTitle( $film_id, $new_title )
	{
		
		$query =<<<SQL
UPDATE 
	film 
SET title = :new_title
WHERE
	film_id = :film_id
SQL;
		
		$this->connectDataBase();
		$this->db->prepare( $query );
		$this->db->bindParam( ':film_id', $film_id , PDO::PARAM_INT );
		$this->db->bindParam( ':new_title',  $new_title , PDO::PARAM_STR );		
		return $this->db->execute();	

	}

	/**
	 * Insert a new Film in datebase
	 * @param  string $title 
	 * @return boolean
	 */
	public function createFilm( $title )
	{
		
		$query =<<<SQL
INSERT INTO 
	film (title)
VALUES ( :title )
SQL;

		$this->connectDataBase();
		$this->db->prepare( $query );
		$this->db->bindParam(':title', $title , PDO::PARAM_STR );
		return $this->db->execute();	

	}

	/**
	 * Get a list of categories with totals of quantity
	 * @return array
	 */
	public function getMenuCategories()
	{
		$query =<<<SQL
SELECT 
	c.category_id, 
	c.name, 
	COUNT(*) AS total_found  
FROM 
	category c 
INNER JOIN 
	film_category fc USING( category_id ) 
GROUP BY c.category_id

SQL;

		$this->connectDataBase();
		$this->db->prepare( $query );
		$this->db->execute();		
		return $this->db->fetchAll();
	}


	public function getFilmsOrderByTitle()
	{
		$query=<<<SQL
SELECT 
	title,
	description
FROM 
	film
ORDER BY
	title	ASC
SQL;

		$this->connectDataBase();
		$this->db->prepare( $query );
		$this->db->execute();		
		return $this->db->fetchAll();
	}


	public function getFilmsOrderByTitleFilterCategory( $current_category )
	{
		$query=<<<SQL
SELECT 
	title,
	description
FROM 
	film f
	INNER JOIN film_category fc ON fc.film_id = f.film_id
	INNER JOIN category c ON c.category_id = fc.category_id
WHERE 
	c.name = :current_category
ORDER BY
	title	ASC


SQL;

		$this->connectDataBase();
		$this->db->prepare( $query );
		$this->db->bindParam(':current_category', $current_category , PDO::PARAM_INT );
		$this->db->execute();		
		return $this->db->fetchAll();
	}

}


