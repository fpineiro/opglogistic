<?php
App::uses('EstadoAutomata', 'Model');

/**
 * EstadoAutomata Test Case
 *
 */
class EstadoAutomataTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estado_automata'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EstadoAutomata = ClassRegistry::init('EstadoAutomata');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EstadoAutomata);

		parent::tearDown();
	}

}
