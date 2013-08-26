<?php
App::uses('CajaMaterialIndividual', 'Model');

/**
 * CajaMaterialIndividual Test Case
 *
 */
class CajaMaterialIndividualTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.caja_material_individual'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CajaMaterialIndividual = ClassRegistry::init('CajaMaterialIndividual');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CajaMaterialIndividual);

		parent::tearDown();
	}

}
