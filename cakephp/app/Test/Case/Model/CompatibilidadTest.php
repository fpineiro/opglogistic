<?php
App::uses('Compatibilidad', 'Model');

/**
 * Compatibilidad Test Case
 *
 */
class CompatibilidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.compatibilidad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Compatibilidad = ClassRegistry::init('Compatibilidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Compatibilidad);

		parent::tearDown();
	}

}
