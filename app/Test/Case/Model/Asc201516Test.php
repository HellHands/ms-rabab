<?php
/* Asc201516 Test cases generated on: 2016-02-14 16:14:18 : 1455462858*/
App::uses('Asc201516', 'Model');

/**
 * Asc201516 Test Case
 *
 */
class Asc201516TestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.asc201516');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Asc201516 = ClassRegistry::init('Asc201516');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Asc201516);

		parent::tearDown();
	}

}
