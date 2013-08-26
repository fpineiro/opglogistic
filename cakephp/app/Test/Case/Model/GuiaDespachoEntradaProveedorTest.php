<?php
App::uses('GuiaDespachoEntradaProveedor', 'Model');

/**
 * GuiaDespachoEntradaProveedor Test Case
 *
 */
class GuiaDespachoEntradaProveedorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guia_despacho_entrada_proveedor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GuiaDespachoEntradaProveedor = ClassRegistry::init('GuiaDespachoEntradaProveedor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GuiaDespachoEntradaProveedor);

		parent::tearDown();
	}

}
