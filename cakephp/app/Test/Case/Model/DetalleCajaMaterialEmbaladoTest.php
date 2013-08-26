<?php
App::uses('DetalleCajaMaterialEmbalado', 'Model');

/**
 * DetalleCajaMaterialEmbalado Test Case
 *
 */
class DetalleCajaMaterialEmbaladoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_caja_material_embalado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleCajaMaterialEmbalado = ClassRegistry::init('DetalleCajaMaterialEmbalado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleCajaMaterialEmbalado);

		parent::tearDown();
	}

}
