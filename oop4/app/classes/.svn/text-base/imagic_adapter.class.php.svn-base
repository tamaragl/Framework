<?php
require_once(_PATH_CORE_ . 'classes/file.class.php');
/**
 * Class Adapter of imagic library	
 */
class ImagicAdapter extends Imagick{

	/**
	 * Instance of File Class
	 */
	public $file;

	/**
	 * Assign instance of File Class
	 */
	public function __construct( File $file, $path = false )
	{
		$this->file = $file;

		if( $path )
		{
			parent::__construct( $path );
		}
		
	}
}