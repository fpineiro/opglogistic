<?php
App::uses('MaterialDeEmbalaje', 'Model');

/**
 * MaterialDeEmbalaje Test Case
 *
 */
class MaterialDeEmbalajeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.material_de_embalaje'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MaterialDeEmbalaje = ClassRegistry::init('MaterialDeEmbalaje');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MaterialDeEmbalaje);

		parent::tearDown();
	}

}
