<?php
App::uses('DetalleCajaMaterialIndividual', 'Model');

/**
 * DetalleCajaMaterialIndividual Test Case
 *
 */
class DetalleCajaMaterialIndividualTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_caja_material_individual'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleCajaMaterialIndividual = ClassRegistry::init('DetalleCajaMaterialIndividual');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleCajaMaterialIndividual);

		parent::tearDown();
	}

}
