<?php
/**
 * ProveedorFixture
 *
 */
class ProveedorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PROVEEDOR_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'NOMBRE_PROVEEDOR' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DIRECCION_PROVEEDOR' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'TELEFONO_CONTACTO_PROVEEDOR' => array('type' => 'integer', 'null' => true, 'default' => null),
		'EMAIL_PROVEEDOR' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PROVEEDOR_ID', 'unique' => 1)
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
			'PROVEEDOR_ID' => 1,
			'NOMBRE_PROVEEDOR' => 'Lorem ipsum dolor sit amet',
			'DIRECCION_PROVEEDOR' => 'Lorem ipsum dolor sit amet',
			'TELEFONO_CONTACTO_PROVEEDOR' => 1,
			'EMAIL_PROVEEDOR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
