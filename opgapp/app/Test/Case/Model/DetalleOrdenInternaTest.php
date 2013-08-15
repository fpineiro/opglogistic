<?php
App::uses('DetalleOrdenInterna', 'Model');

/**
 * DetalleOrdenInterna Test Case
 *
 */
class DetalleOrdenInternaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_orden_interna'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleOrdenInterna = ClassRegistry::init('DetalleOrdenInterna');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleOrdenInterna);

		parent::tearDown();
	}

}
