<?php
App::uses('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente', 'Model');

/**
 * DetalleGuiaDespachoEntradaMaterialEmbalajeCliente Test Case
 *
 */
class DetalleGuiaDespachoEntradaMaterialEmbalajeClienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_guia_despacho_entrada_material_embalaje_cliente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente = ClassRegistry::init('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente);

		parent::tearDown();
	}

}
