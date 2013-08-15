<?php
App::uses('DespachoCamion', 'Model');

/**
 * DespachoCamion Test Case
 *
 */
class DespachoCamionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.despacho_camion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DespachoCamion = ClassRegistry::init('DespachoCamion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DespachoCamion);

		parent::tearDown();
	}

}
