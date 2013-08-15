<?php
App::uses('DetalleSolicitudEmbalajeMaterialEmbalaje', 'Model');

/**
 * DetalleSolicitudEmbalajeMaterialEmbalaje Test Case
 *
 */
class DetalleSolicitudEmbalajeMaterialEmbalajeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_solicitud_embalaje_material_embalaje'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleSolicitudEmbalajeMaterialEmbalaje = ClassRegistry::init('DetalleSolicitudEmbalajeMaterialEmbalaje');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleSolicitudEmbalajeMaterialEmbalaje);

		parent::tearDown();
	}

}
