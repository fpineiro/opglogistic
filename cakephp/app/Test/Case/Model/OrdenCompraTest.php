<?php
App::uses('OrdenCompra', 'Model');

/**
 * OrdenCompra Test Case
 *
 */
class OrdenCompraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.orden_compra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrdenCompra = ClassRegistry::init('OrdenCompra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrdenCompra);

		parent::tearDown();
	}

}
