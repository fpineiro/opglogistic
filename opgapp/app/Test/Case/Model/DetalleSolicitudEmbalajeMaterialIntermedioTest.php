<?php
App::uses('DetalleSolicitudEmbalajeMaterialIntermedio', 'Model');

/**
 * DetalleSolicitudEmbalajeMaterialIntermedio Test Case
 *
 */
class DetalleSolicitudEmbalajeMaterialIntermedioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_solicitud_embalaje_material_intermedio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleSolicitudEmbalajeMaterialIntermedio = ClassRegistry::init('DetalleSolicitudEmbalajeMaterialIntermedio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleSolicitudEmbalajeMaterialIntermedio);

		parent::tearDown();
	}

}
