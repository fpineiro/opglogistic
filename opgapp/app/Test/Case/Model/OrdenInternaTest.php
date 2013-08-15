<?php
App::uses('OrdenInterna', 'Model');

/**
 * OrdenInterna Test Case
 *
 */
class OrdenInternaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.orden_interna'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrdenInterna = ClassRegistry::init('OrdenInterna');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrdenInterna);

		parent::tearDown();
	}

}
