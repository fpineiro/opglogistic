<?php
App::uses('Posicion', 'Model');

/**
 * Posicion Test Case
 *
 */
class PosicionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.posicion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Posicion = ClassRegistry::init('Posicion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Posicion);

		parent::tearDown();
	}

}
