<?
spl_autoload_register('autoloadModels');
spl_autoload_register('autoloadControllers');

/**
* Load models classes
* @param string $class_name is a name of class
*/
function autoloadModels( $class_name )
{
	
	$class = preg_replace( '/(?!^)[[:upper:]]/' , ' $0', $class_name ); 
	$directories = explode(' ', $class);
	$size = sizeof( $directories );
	
	if( $directories[$size-1] == 'Model' )
	{
		$file = strtolower($directories[$size-2]);
		$path = '';

		for($i=0; $i < $size-2; $i++)
		{
			$path .=strtolower($directories[$i]).'/'; 
		}
		
		
		$filename = _PATH_APP_ . 'models/'.$path . $file . '.model.php';
		
		if( file_exists( $filename ) )
		{	
			require_once( $filename );
		}	
	}
}


/**
* Load controllers classes
* @param string $class_name is a name of class
*/
function autoloadControllers( $class_name )
{
	
	$class = preg_replace( '/(?!^)[[:upper:]]/' , ' $0', $class_name ); 
	$directories = explode(' ', $class);
	$size = sizeof( $directories );

	if( $directories[$size-1] == 'Controller' )
	{

		$file = strtolower($directories[$size-2]);
		$path = '';


		for($i=0; $i < $size-2; $i++)
		{
			$path .=strtolower($directories[$i]).'/'; 
		}
		
		
		$filename = _PATH_APP_ . 'controllers/'.$path . $file . '.ctrl.php';
			
		if( file_exists( $filename ) )
		{	
			
			require_once( $filename );
		}	
	}
}



