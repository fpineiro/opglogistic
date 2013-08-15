<?php
/**
 * CompatibilidadFixture
 *
 */
class CompatibilidadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'MATERIAL_INTERMEDIO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('MATERIAL_INTERMEDIO_ID', 'MATERIAL_DE_EMBALAJE_ID'), 'unique' => 1),
			'FK_RELATIONSHIP_24' => array('column' => 'MATERIAL_DE_EMBALAJE_ID', 'unique' => 0)
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
			'MATERIAL_INTERMEDIO_ID' => 1,
			'MATERIAL_DE_EMBALAJE_ID' => 1
		),
	);

}
