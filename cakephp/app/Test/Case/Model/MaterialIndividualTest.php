<?php
App::uses('MaterialIndividual', 'Model');

/**
 * MaterialIndividual Test Case
 *
 */
class MaterialIndividualTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.material_individual'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MaterialIndividual = ClassRegistry::init('MaterialIndividual');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MaterialIndividual);

		parent::tearDown();
	}

}
