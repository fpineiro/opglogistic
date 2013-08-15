<?php
/**
 * ClienteFixture
 *
 */
class ClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CLIENTE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'NOMBRE_CLIENTE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DIRECCION_CLIENTE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'TELEFONO_CONTACTO_CLIENTE' => array('type' => 'integer', 'null' => true, 'default' => null),
		'EMAIL_CLIENTE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CLIENTE_ID', 'unique' => 1),
			'FK_RELATIONSHIP_52' => array('column' => 'ID', 'unique' => 0)
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
			'CLIENTE_ID' => 1,
			'ID' => 1,
			'NOMBRE_CLIENTE' => 'Lorem ipsum dolor sit amet',
			'DIRECCION_CLIENTE' => 'Lorem ipsum dolor sit amet',
			'TELEFONO_CONTACTO_CLIENTE' => 1,
			'EMAIL_CLIENTE' => 'Lorem ipsum dolor sit amet'
		),
	);

}
