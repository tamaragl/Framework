<?php

require_once( _PATH_APP_ . 'classes/imagic_adapter.class.php');

/**
 * Manage data of staff's avatar
 */
class StaffAvatarModel{

	public $imagic;

	/**
	 * Set ImageAdapter instance
	 * @param ImagicAdapter $imagic 
	 */
	public function __construct( ImagicAdapter $imagic )
	{
		$this->imagic = $imagic;
	}

	/**
	 * Generate a final file name 
	 * @param string $image_name name of original image 
	 * @return string final name of image
	 */
	public function getFinalName( $image_name )
	{
		$pieces = explode('.', $image_name );
		$size = count( $pieces );

		$name = '';
		for($i = 0; $i < $size-1; $i++)
		{
			$name .= $pieces[$i];
		}

		$name .= '_'.time();
		
		return md5( $image_name ).'.jpg';		
	}

	/**
	 * Generate a path of avatar 
	 * @param string $final_name final name of image
	 * @return string $directory relative path of avatar
	 */
	public function getPath( $final_name )
	{
		$first_directory 	= substr( $final_name, 0, 2 );
		$second_directory 	= substr( $final_name, 2, 2 );
		
		$directory = 	'/images/' 
						. $first_directory 
						. '/' 
						. $second_directory 
						. '/';	
		return 	$directory;
	}

	/**
	 * Create a directory of path
	 * @param string path of image
	 */
	protected function generatePath( $directory )
	{
		if(!is_dir( _PATH_PUBLIC_ . $directory ) )
		{
			mkdir( _PATH_PUBLIC_ . $directory, 0777, true );
		}
	}

	/**
	 * Resize Avatar and write it in the directoy
	 * @param string $image_tmp path of temporal image
	 * @param string $final_path final path of avatar
	 * @param string $path path of folders without image
	 */
	public function generateThumbnail( $image_tmp, $final_path, $path )
	{
			
		$this->imagic->adaptiveResizeImage( 100, 100 );

		$this->generatePath( $path );		
		$this->imagic->writeImage( $final_path );
	}

	/**
	 * Get path of avatar with image
	 * @param string file name
	 * @return string path with image
	 */
	public function getImagePath( $avatar_name )
	{
		$avatar_path = $this->getPath( $avatar_name);	
		$avatar_file = $avatar_path . $avatar_name;
		return $avatar_file;
	}
	
}