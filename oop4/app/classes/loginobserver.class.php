<?php

require_once(_PATH_APP_ . 'classes/observer.class.php');

/**
 * Look at events in login controller
 */
class LoginObserver extends Observer
{
	/**
	 * Check if login is Ok
	 */
	public function actionEventLogin()
	{
		echo 'Alguien ha hecho login!';
	}
}