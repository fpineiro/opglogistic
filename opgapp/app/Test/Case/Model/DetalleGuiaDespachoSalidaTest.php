<?php
App::uses('DetalleGuiaDespachoSalida', 'Model');

/**
 * DetalleGuiaDespachoSalida Test Case
 *
 */
class DetalleGuiaDespachoSalidaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_guia_despacho_salida'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleGuiaDespachoSalida = ClassRegistry::init('DetalleGuiaDespachoSalida');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleGuiaDespachoSalida);

		parent::tearDown();
	}

}
