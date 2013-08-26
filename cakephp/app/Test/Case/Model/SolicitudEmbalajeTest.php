<?php
App::uses('SolicitudEmbalaje', 'Model');

/**
 * SolicitudEmbalaje Test Case
 *
 */
class SolicitudEmbalajeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solicitud_embalaje'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SolicitudEmbalaje = ClassRegistry::init('SolicitudEmbalaje');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SolicitudEmbalaje);

		parent::tearDown();
	}

}
