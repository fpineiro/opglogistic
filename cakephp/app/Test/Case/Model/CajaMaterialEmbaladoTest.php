<?php
App::uses('CajaMaterialEmbalado', 'Model');

/**
 * CajaMaterialEmbalado Test Case
 *
 */
class CajaMaterialEmbaladoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.caja_material_embalado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CajaMaterialEmbalado = ClassRegistry::init('CajaMaterialEmbalado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CajaMaterialEmbalado);

		parent::tearDown();
	}

}
