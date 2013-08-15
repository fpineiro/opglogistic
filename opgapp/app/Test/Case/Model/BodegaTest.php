<?php
App::uses('Bodega', 'Model');

/**
 * Bodega Test Case
 *
 */
class BodegaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bodega'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bodega = ClassRegistry::init('Bodega');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bodega);

		parent::tearDown();
	}

}
