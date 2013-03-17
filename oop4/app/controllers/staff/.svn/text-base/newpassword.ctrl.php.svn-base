<?

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Manage how to change a new password
 */
class StaffNewPasswordController extends Controller{
	
	public function build()
	{
		$url = $this->server->getValue( 'REQUEST_URI', 'text');
		$url_explode = explode('/', $url);
		
		$email = $url_explode[2];
		$code = $url_explode[3];

		$staff= Factorymodel::getClass( 'StaffStaffModel' );
		
		
		if( $staff->isCorrectCodeAuth( $email, $code ) ) 
		{			
			$this->view->setView( 'staff/newpassword' );
			$this->view->display();	

			$submit 	= $this->post->getValue( 'submit', 'text');
			$password 	= $this->post->getValue( 'password', 'text');

			if( $submit )
			{
				$staff= Factorymodel::getClass( 'StaffStaffModel' );
				$staff->setPasswordByEmail( $email, $staff->encryptPassword( $password ) );

				header( 'Location: /login' ) ;
			}
		}
		
	}

}