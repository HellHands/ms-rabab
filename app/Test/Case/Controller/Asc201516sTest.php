<?php
/* Asc201516s Test cases generated on: 2016-02-14 16:17:12 : 1455463032*/
App::uses('Asc201516s', 'Controller');

/**
 * TestAsc201516s 
 *
 */
class TestAsc201516s extends Asc201516s {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * Asc201516s Test Case
 *
 */
class Asc201516sTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Asc201516s = new TestAsc201516s();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Asc201516s);

		parent::tearDown();
	}

}
