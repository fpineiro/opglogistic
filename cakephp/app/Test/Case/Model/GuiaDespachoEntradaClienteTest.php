<?php
App::uses('GuiaDespachoEntradaCliente', 'Model');

/**
 * GuiaDespachoEntradaCliente Test Case
 *
 */
class GuiaDespachoEntradaClienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guia_despacho_entrada_cliente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GuiaDespachoEntradaCliente = ClassRegistry::init('GuiaDespachoEntradaCliente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GuiaDespachoEntradaCliente);

		parent::tearDown();
	}

}
