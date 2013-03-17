<?
/**
 * To manage files 
 */
class File{

	/**
	 * To upload file in a directory
	 * @param string path of temporal file
	 * @param string $final_filename a name of final file
	 * @param string $path a directory 
	 */
	public function uploadFile( $tmp_name, $final_filename, $path )
	{
		$this->generatePath( $path );

		if ( !!$tmp_name ) 		  
		{	
			$new_directory = $path . $final_filename;

	        if ( move_uploaded_file( $tmp_name,  $new_directory ) )
	        {
	            echo  'the file has been moved correctly';
	        }		  
		}
	}

	/**
	 * To generate a directories
	 * @param string a directories
	 */
	protected function generatePath( $directory )
	{
		if(!is_dir( _PATH_PUBLIC_ . $directory ) )
		{
			mkdir( _PATH_PUBLIC_ . $directory, 0777, true );
		}
	}

	

}