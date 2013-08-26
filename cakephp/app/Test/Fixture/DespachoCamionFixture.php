<?php
/**
 * DespachoCamionFixture
 *
 */
class DespachoCamionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DESPACHO_CAMION_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'FECHA_DESPACHO_CAMION' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'ID_CAMION' => array('type' => 'integer', 'null' => true, 'default' => null),
		'RUT_CAMIONERO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'DESPACHO_CAMION_ID', 'unique' => 1)
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
			'DESPACHO_CAMION_ID' => 1,
			'FECHA_DESPACHO_CAMION' => 1376606305,
			'ID_CAMION' => 1,
			'RUT_CAMIONERO' => 'Lorem ipsum dolor '
		),
	);

}
