<?

require_once(_PATH_APP_ . 'classes/controller.class.php');
require_once(_PATH_CORE_ . 'classes/encrypter_md5.class.php');
require_once(_PATH_CORE_ . 'classes/encrypter.class.php');

/**
 * Manage a login of staff
 */
class StaffRegisterController extends Controller
{
	
	protected $template = 'staff/register';

	public function build()
	{
			
		$submit = $this->post->getValue( 'submit', 'text');

		if( !empty( $submit ) )
		{					
			
			$first_name = $this->post->getValue( 'first_name', 	'text');
			$last_name 	= $this->post->getValue( 'last_name', 	'text');
			$address_id = $this->post->getValue( 'address_id', 	'number');
			$email 		= $this->post->getValue( 'email', 		'email', '');
			$store_id	= $this->post->getValue( 'store_id', 	'number');
			$active 	= $this->post->getValue( 'active', 		'number', 1);
			$username 	= $this->post->getValue( 'username', 	'text');
			$password 	= $this->encryptPassword($this->post->getValue( 'password', 'text'));
			
			if( $email  && $username && $password )
			{				
				$staff= Factorymodel::getClass( 'StaffStaffModel' );
				$staff->setStaffUser(
								$first_name,
								$last_name,
								$address_id,
								$email,
								$store_id,
								$active,	
								$username, 
								$password );		
			}
			else
			{
				throw new Exception('Error en input data');
			}
			
			header( 'Location: /list-staff' ) ;
		
		}

		$this->view->setView( $this->template );
	}

	/**
	 * Encrypt a password 
	 * @param string $password
	 */
	public function encryptPassword( $password )
	{
		$md5 			= new EncrypterMD5();
		$myEncrypter 	= new Encrypter();

		$myEncrypter->setEncryptionMethod( $md5 );	
		return $myEncrypter->encrypt( $password );
	}
}