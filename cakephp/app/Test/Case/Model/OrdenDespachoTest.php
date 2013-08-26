<?php
App::uses('OrdenDespacho', 'Model');

/**
 * OrdenDespacho Test Case
 *
 */
class OrdenDespachoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.orden_despacho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrdenDespacho = ClassRegistry::init('OrdenDespacho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrdenDespacho);

		parent::tearDown();
	}

}
