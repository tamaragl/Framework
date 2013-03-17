<?

require_once(_PATH_APP_ . 'classes/controller.class.php');
require_once(_PATH_CORE_ . 'classes/encrypter_md5.class.php');
require_once(_PATH_CORE_ . 'classes/encrypter.class.php');
require_once(_PATH_CORE_ . 'classes/session.class.php');
require_once(_PATH_CORE_ . 'classes/cookie.class.php');


/**  
 * Make logout of session
 */
class StaffLogoutController extends Controller{
	
	/**
	 * Delete sesssion and cookie of login
	 */
	public function build()
	{
		
		$this->session->destroy();
		$this->cookie->destroy('login');
		
		header( 'Location: /login' );

	}

	
}