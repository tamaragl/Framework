<?php 
/**
 * Manage upload image
 */
abstract class UploadFile
{
	
	/**
	 * Store image
	 */
	protected $name 		= '';
	protected $tmp_name 	= '';
	protected $filename 	= '';
	protected $directory 	= '';

	public function __construct(  )
	{
			
	}

	public  function setData( $file )
	{
		$this->name = $file['file']['name'];
		$this->tmp_name = $file['file']['tmp_name'];

		$this->setName();
		$this->setPath( $this->filename );
	}

	
	public function saveFile()
	{	
		if ( !!$this->tmp_name ) 
		{
		  
			$this->generatePath();

			$new_directory = $this->directory  .$this->filename;
	        if ( move_uploaded_file($this->tmp_name,  $new_directory) )
	        {
	            echo  'the file has been moved correctly';
	        }		  
		}		
	}

	protected function generatePath()
	{
		if(!is_dir( _PATH_PUBLIC_ . $this->directory ) )
		{
			mkdir( _PATH_PUBLIC_ . $this->directory, 0777, true );
		}
	}

	public function getName()
	{
		return $this->filename;
	}

	public  function getFullPath( $image_name ){
		$this->setPath( $image_name );
		return $this->directory . $image_name . '.jpg';
	}


	abstract protected function setName();

	abstract protected function setPath( $filename );

	


}
