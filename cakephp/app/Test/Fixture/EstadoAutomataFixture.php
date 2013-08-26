<?php
/**
 * EstadoAutomataFixture
 *
 */
class EstadoAutomataFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ESTADO_AUTOMATA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'NOMBRE_ESTADO_AUTOMATA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ESTADO_AUTOMATA_ID', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ESTADO_AUTOMATA_ID' => 1,
			'NOMBRE_ESTADO_AUTOMATA' => 'Lorem ipsum dolor sit amet'
		),
	);

}
