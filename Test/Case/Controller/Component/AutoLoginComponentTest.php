<?php
/**
 * AutoLogin Test Cases.
 *
 * @author		Miles Johnson - http://milesj.me
 * @copyright	Copyright 2006-2011, Miles Johnson, Inc.
 * @license		http://opensource.org/licenses/mit-license.php - Licensed under The MIT License
 * @link		http://milesj.me/code/cakephp/auto-login
 */

App::import('Component', 'AutoLogin');
App::uses('Controller', 'Controller');

class AutoLoginComponentTest extends CakeTestCase {

	/**
	 * setUp method
	 *
	 * @access public
	 * @return void
	 */
	public function setUp() {
		$this->Controller = new AutoLoginTestController(new CakeRequest(), new CakeResponse());
		$this->Controller->AutoLogin = new AutoLoginComponent(new ComponentCollection());
	}

	/**
	 * Tear-down method.  Resets environment state.
	 *
	 * @access public
	 * @return void
	 */
	public function tearDown() {
		unset($this->Controller->AutoLogin);
		unset($this->Controller);
	}

	/**
	 * Test if suhosin isn't messing up srand() and mt_srand()
	 * Run this on every the environment you want AutoLogin to work!
	 * It this test fails add `suhosin.srand.ignore = Off` in your `/etc/php5/apache2/php.ini`
	 * And don't forget to restart apache or at least `/etc/init.d/apache2 force-reload`
	 */
	public function testIfRandWillWork() {
		srand('1234567890');
		$rand1 = rand(0, 255);

		srand('1234567890');
		$rand2 = rand(0, 255);

		$this->assertSame($rand1, $rand2, 'You have the Suhosin BUG! Add `suhosin.srand.ignore = Off` to your php.ini!');
	}

}

class AutoLoginTestController extends Controller {

	/**
	 * Components.
	 *
	 * @access public
	 * @var array
	 */
	public $components = array('AutoLogin');

	/**
	 * Failed property.
	 *
	 * @access public
	 * @var boolean
	 */
	public $failed = false;

	/**
	 * Used for keeping track of headers in test.
	 *
	 * @access public
	 * @var array
	 */
	public $testHeaders = array();

	/**
	 * Fail method.
	 *
	 * @access public
	 * @return void
	 */
	public function fail() {
		$this->failed = true;
	}

	/**
	 * Redirect method.
	 *
	 * @access public
	 * @param mixed $option
	 * @param mixed $code
	 * @param mixed $exit
	 * @return void
	 */
	public function redirect($option, $code, $exit) {
		return $code;
	}

	/**
	 * Convenience method for header().
	 *
	 * @access public
	 * @param string $status
	 * @return void
	 */
	public function header($status) {
		$this->testHeaders[] = $status;
	}

}
