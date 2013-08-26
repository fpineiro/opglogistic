<?php
App::uses('MaterialIntermedio', 'Model');

/**
 * MaterialIntermedio Test Case
 *
 */
class MaterialIntermedioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.material_intermedio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MaterialIntermedio = ClassRegistry::init('MaterialIntermedio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MaterialIntermedio);

		parent::tearDown();
	}

}
