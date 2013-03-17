<?php 

/**
* This class manage inputs and validate data
*/
abstract class Filter
{

	protected $input = array();

	public function getValue( $key , $filter, $default = '')
	{

		if(!array_key_exists( $key, $this->input ) )
		{			
			return	$default;	
		}		

		switch ($filter) 
		{
			case 'text':
				return $this->getText($this->input[$key], $default);
			break;
			
			case 'number':
				return $this->getNumber($this->input[$key], $default);
			break;

			case 'HTML':				
				return $this->getHtml($this->input[$key], $default);
			break;

			case 'email':
				return $this->getEmail($this->input[$key], $default);
			break;

			default:
				return $this->getText($this->input[$key], $default);
			break;
		}

		


	}

	public function getValues()
	{
		return $this->input;
	}

	/**
	 * Filter a input string and return plain text
	 * @param string
	 */
	public static function getText( $string, $default)
	{			
		return filter_var( $string, FILTER_SANITIZE_MAGIC_QUOTES);
	}

	/**
	 * Filter a input string and return text with HTML tags
	 * @param string
	 */
	public static function getHTML( $string, $default )
	{
		return strip_tags( $string, '<strong><a><p>' );
	}

	/**
	 * Filter a input string and return a number
	 * @param mixed
	 */
	public static function getNumber( $string, $default )
	{
		return filter_var( 	$string, 
							FILTER_SANITIZE_NUMBER_FLOAT, 
							FILTER_FLAG_ALLOW_FRACTION);
	}

	/**
	 * Filter a input string and return a email
	 * @param string
	 */
	public static function getEmail( $string , $default)
	{
		return filter_var( $string, FILTER_SANITIZE_EMAIL);
	}
}
