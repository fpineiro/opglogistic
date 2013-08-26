<?php
App::uses('DetalleCajaMaterialDeEmbalaje', 'Model');

/**
 * DetalleCajaMaterialDeEmbalaje Test Case
 *
 */
class DetalleCajaMaterialDeEmbalajeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_caja_material_de_embalaje'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleCajaMaterialDeEmbalaje = ClassRegistry::init('DetalleCajaMaterialDeEmbalaje');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleCajaMaterialDeEmbalaje);

		parent::tearDown();
	}

}
