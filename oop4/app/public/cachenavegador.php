<?php

		$last_modified = time() + 20;
		$last_modified_server = (int)$_SERVER['HTTP_IF_MODIFIED_SINCE'];

		$date_last_modified = strtotime( $last_modified );
		$date_last_modified_server = strtotime( $last_modified_server );

		var_dump($last_modified, $last_modified_server);

		if( $last_modified == $last_modified_server)
		{
			header('Last-Modified: ' . $last_modified);
			
			
		}
		else
		{	
			header('HTTP/1.1 304 Not Modified');

		}

echo '<html><head></head><body><a href="/cachenavegador.php">hola</a></body></html>';