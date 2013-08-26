<?php
App::uses('DetalleOrdenDespacho', 'Model');

/**
 * DetalleOrdenDespacho Test Case
 *
 */
class DetalleOrdenDespachoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_orden_despacho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleOrdenDespacho = ClassRegistry::init('DetalleOrdenDespacho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleOrdenDespacho);

		parent::tearDown();
	}

}
