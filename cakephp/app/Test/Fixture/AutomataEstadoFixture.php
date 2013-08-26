<?php
/**
 * AutomataEstadoFixture
 *
 */
class AutomataEstadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TRANSICION_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ESTADO_AUTOMATA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'EST_ESTADO_AUTOMATA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'ES_ESTADO_INICIAL' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'FINAL_NORMAL' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'FINAL_INESPERADO' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'TRANSICION_ID', 'unique' => 1),
			'FK_RELATIONSHIP_34' => array('column' => 'EST_ESTADO_AUTOMATA_ID', 'unique' => 0),
			'FK_RELATIONSHIP_35' => array('column' => 'ESTADO_AUTOMATA_ID', 'unique' => 0)
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
			'TRANSICION_ID' => 1,
			'ESTADO_AUTOMATA_ID' => 1,
			'EST_ESTADO_AUTOMATA_ID' => 1,
			'ES_ESTADO_INICIAL' => 1,
			'FINAL_NORMAL' => 1,
			'FINAL_INESPERADO' => 1
		),
	);

}
