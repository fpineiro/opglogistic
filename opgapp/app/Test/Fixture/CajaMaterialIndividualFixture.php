<?php
/**
 * CajaMaterialIndividualFixture
 *
 */
class CajaMaterialIndividualFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CAJA_MATERIAL_INDIVIDUAL_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'POSICION_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'NOMBRE_CAJA_MATERIAL_INDIVIDUAL' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CAPACIDAD_CAJA_MATERIAL_INDIVIDUAL' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ALTO_CAJA_MATERIAL_INDIVIDUAL' => array('type' => 'integer', 'null' => true, 'default' => null),
		'LARGO_CAJA_MATERIAL_INDIVIDUAL' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ANCHO_CAJA_MATERIAL_INDIVIDUAL' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CAJA_MATERIAL_INDIVIDUAL_ID', 'unique' => 1),
			'FK_RELATIONSHIP_48' => array('column' => 'POSICION_ID', 'unique' => 0)
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
			'CAJA_MATERIAL_INDIVIDUAL_ID' => 1,
			'POSICION_ID' => 1,
			'NOMBRE_CAJA_MATERIAL_INDIVIDUAL' => 'Lorem ipsum dolor sit amet',
			'CAPACIDAD_CAJA_MATERIAL_INDIVIDUAL' => 1,
			'ALTO_CAJA_MATERIAL_INDIVIDUAL' => 1,
			'LARGO_CAJA_MATERIAL_INDIVIDUAL' => 1,
			'ANCHO_CAJA_MATERIAL_INDIVIDUAL' => 1
		),
	);

}
