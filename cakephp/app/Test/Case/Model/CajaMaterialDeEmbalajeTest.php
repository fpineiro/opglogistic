<?php
App::uses('CajaMaterialDeEmbalaje', 'Model');

/**
 * CajaMaterialDeEmbalaje Test Case
 *
 */
class CajaMaterialDeEmbalajeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.caja_material_de_embalaje'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CajaMaterialDeEmbalaje = ClassRegistry::init('CajaMaterialDeEmbalaje');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CajaMaterialDeEmbalaje);

		parent::tearDown();
	}

}
