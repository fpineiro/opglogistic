<?php
/**
 * PosicionFixture
 *
 */
class PosicionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'POSICION_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'POS_POSICION_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'BODEGA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'NOMBRE_POSICION' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ALTO_POSICION' => array('type' => 'integer', 'null' => true, 'default' => null),
		'LARGO_POSICION' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ANCHO_POSICION' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'POSICION_ID', 'unique' => 1),
			'FK_RELATIONSHIP_49' => array('column' => 'POS_POSICION_ID', 'unique' => 0),
			'FK_RELATIONSHIP_50' => array('column' => 'BODEGA_ID', 'unique' => 0)
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
			'POSICION_ID' => 1,
			'POS_POSICION_ID' => 1,
			'BODEGA_ID' => 1,
			'NOMBRE_POSICION' => 'Lorem ipsum dolor sit amet',
			'ALTO_POSICION' => 1,
			'LARGO_POSICION' => 1,
			'ANCHO_POSICION' => 1
		),
	);

}
