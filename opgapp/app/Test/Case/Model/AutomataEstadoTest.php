<?php
App::uses('AutomataEstado', 'Model');

/**
 * AutomataEstado Test Case
 *
 */
class AutomataEstadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.automata_estado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AutomataEstado = ClassRegistry::init('AutomataEstado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AutomataEstado);

		parent::tearDown();
	}

}
