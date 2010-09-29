# Auto Login v1.9 #

A CakePHP Component that will automatically login the Auth session for a duration if the user requested to (saves data to cookies).

## Requirements ##

* CakePHP 1.2.x, 1.3.x
* PHP 5.2.x, 5.3.x
* Auth, Cookie Component

## Features ##

* Requires no installation except for adding the checkbox into your user login forms
* Automatically saves the cookie and info when a user logs in
* Automatically kills the cookie and session when a user logs out
* Inserts a hash within the cookie so that it cannot be hijacked
* Encrypts the cookie so the information cannot be harvested
* Configuration options for cookie name and length
* Functionality for additional user updating or error logging

## Documentation ##

Begin by placing the component in your controllers/components/ directory and then adding it to your AppController.

	public $components = array('AutoLogin', 'Cookie', 'Auth');

Add a checkbox to your login form to indicate the "remember me" functionality.

	echo $this->Form->input('auto_login', array('type' => 'checkbox', 'label' => 'Remember Me?'));

Customize the settings of the component to match your application.

	public function beforeFilter() {
		$this->AutoLogin->cookieName = 'rememberMe';
		$this->AutoLogin->expires = '+1 month';
		$this->AutoLogin->settings = array(
			'controller' => 'Members',
			'loginAction' => 'signin',
			'logoutAction' => 'signout'
		);
	}

Lastly, the component allows you to define a method to be triggered after every successful login. This method could be used to initialize the users session, update the users last login in time, etc, etc. All you need to do is add a method called _autoLogin() to your AppController.

	public function _autoLogin($user) {
		// Do something
		// $user contains the Auth session
	}