<?

require_once(_PATH_APP_ . 'classes/controller.class.php');
require_once(_PATH_CORE_ . 'classes/encrypter_md5.class.php');
require_once(_PATH_CORE_ . 'classes/encrypter.class.php');


/**
 * Manage a forgot password
 */
class StaffForgotpasswordController extends Controller
{
	
	protected $template = 'staff/forgotpassword';

	public function build()
	{
			$submit 	= $this->post->getValue( 'submit', 'text');
			$email		= $this->post->getValue( 'email', 'text');	
		if( !empty( $submit ) )
		{
				
			
			$staff= Factorymodel::getClass( 'StaffStaffModel' );

			if ( $staff->isExistEmail( $email ) )
			{
				echo $this->generateUrlPassword( $email );
			}
			else
			{
				echo "Don't exist this email in bbdd.";
			}

		} 		
		
		$this->view->setView( $this->template );
	}

	
	/**
	 * Generate a URL for change password
	 * @param string $email staff's email to change password
	 * @return string $url
	 */
	public function generateUrlPassword( $email )
	{
		$url = '';
		$code_auth = md5($email.time());
		$url = "http://192.168.75.128/new-password/$email/$code_auth";

		$staff= Factorymodel::getClass( 'StaffStaffModel' );

		if($staff->isExistEmail( $email ))
		{
			$staff->setCodeAuth( $email, $code_auth );
			return $url;
		}
		
	}


}