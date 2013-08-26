<?php
App::uses('DetalleOrdenCompra', 'Model');

/**
 * DetalleOrdenCompra Test Case
 *
 */
class DetalleOrdenCompraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_orden_compra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleOrdenCompra = ClassRegistry::init('DetalleOrdenCompra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleOrdenCompra);

		parent::tearDown();
	}

}
