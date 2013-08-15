<?php
App::uses('GuiaDespachoSalida', 'Model');

/**
 * GuiaDespachoSalida Test Case
 *
 */
class GuiaDespachoSalidaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guia_despacho_salida'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GuiaDespachoSalida = ClassRegistry::init('GuiaDespachoSalida');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GuiaDespachoSalida);

		parent::tearDown();
	}

}
