<?php
App::uses('Auditoria', 'Model');

/**
 * Auditoria Test Case
 *
 */
class AuditoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.auditoria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Auditoria = ClassRegistry::init('Auditoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Auditoria);

		parent::tearDown();
	}

}
