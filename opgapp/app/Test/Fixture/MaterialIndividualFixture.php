<?php
/**
 * MaterialIndividualFixture
 *
 */
class MaterialIndividualFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'MATERIAL_INDIVIDUAL_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'NOMBRE_MATERIAL_INDIVIDUAL' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'MATERIAL_INDIVIDUAL_ID', 'unique' => 1)
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
			'MATERIAL_INDIVIDUAL_ID' => 1,
			'NOMBRE_MATERIAL_INDIVIDUAL' => 'Lorem ipsum dolor sit amet'
		),
	);

}
