<?php
App::uses('DetalleGuiaDespachoEntradaProveedor', 'Model');

/**
 * DetalleGuiaDespachoEntradaProveedor Test Case
 *
 */
class DetalleGuiaDespachoEntradaProveedorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_guia_despacho_entrada_proveedor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleGuiaDespachoEntradaProveedor = ClassRegistry::init('DetalleGuiaDespachoEntradaProveedor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleGuiaDespachoEntradaProveedor);

		parent::tearDown();
	}

}
