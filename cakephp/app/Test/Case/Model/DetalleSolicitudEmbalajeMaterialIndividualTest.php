<?php
App::uses('DetalleSolicitudEmbalajeMaterialIndividual', 'Model');

/**
 * DetalleSolicitudEmbalajeMaterialIndividual Test Case
 *
 */
class DetalleSolicitudEmbalajeMaterialIndividualTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_solicitud_embalaje_material_individual'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleSolicitudEmbalajeMaterialIndividual = ClassRegistry::init('DetalleSolicitudEmbalajeMaterialIndividual');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleSolicitudEmbalajeMaterialIndividual);

		parent::tearDown();
	}

}
