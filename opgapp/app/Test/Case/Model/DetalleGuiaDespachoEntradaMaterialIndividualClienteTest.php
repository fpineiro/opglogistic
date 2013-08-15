<?php
App::uses('DetalleGuiaDespachoEntradaMaterialIndividualCliente', 'Model');

/**
 * DetalleGuiaDespachoEntradaMaterialIndividualCliente Test Case
 *
 */
class DetalleGuiaDespachoEntradaMaterialIndividualClienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_guia_despacho_entrada_material_individual_cliente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleGuiaDespachoEntradaMaterialIndividualCliente = ClassRegistry::init('DetalleGuiaDespachoEntradaMaterialIndividualCliente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleGuiaDespachoEntradaMaterialIndividualCliente);

		parent::tearDown();
	}

}
