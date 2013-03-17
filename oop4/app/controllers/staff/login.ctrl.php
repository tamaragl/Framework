	<?

	require_once(_PATH_APP_ . 'classes/controller.class.php');
	require_once(_PATH_CORE_ . 'classes/encrypter_md5.class.php');
	require_once(_PATH_CORE_ . 'classes/encrypter.class.php');
	require_once(_PATH_CORE_ . 'classes/session.class.php');
	require_once(_PATH_CORE_ . 'classes/cookie.class.php');

	require_once(_PATH_CORE_ . 'classes/apc_cache.class.php');
	require_once(_PATH_CORE_ . 'classes/memcached.class.php');

	require_once(_PATH_APP_ . 'classes/loginobserver.class.php');


	/**
	 * Manage a login of staff
	 */
	class StaffLoginController extends Controller
	{
		protected $template = 'staff/login';

		public function build()
		{	
			
			$login_observer = new LoginObserver;
			$login_observer->registerEvent( 'loginOK', 'actionEventLogin');
			$this->subject->registerObserver( 'loginOK', $login_observer );

			if( $this->cookie->get( 'login', '' ) == '' )
			{
				$submit 	= $this->post->getValue( 'submit', 'text');
				$username 	= $this->post->getValue( 'username', 'text');
				$password 	= $this->encryptPassword( $this->post->getValue( 'password', 'text') );

				
				$staff= Factorymodel::getClass( 'StaffStaffModel');
				$staff->setCache( new MemcachedCache('localhost', 11211) );

								
				

				if( $staff->validateLogin( $username, $password) )
				{	

					$this->subject->notifyObservers('loginOK');					
					
					$this->session->set('login', $username );
					$this->cookie->set('login', $username );

					header( 'Location: /list-staff' ) ;
				}
				
				$this->view->setView( $this->template );
			}
			else
			{
				$this->session->set('login', $this->cookie->get('login', '') );
				header( 'Location: /list-staff' ) ;
			}

			
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