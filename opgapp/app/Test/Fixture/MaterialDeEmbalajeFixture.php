<?php
/**
 * MaterialDeEmbalajeFixture
 *
 */
class MaterialDeEmbalajeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'NOMBRE_MATERIAL_DE_EMBALAJE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'MATERIAL_DE_EMBALAJE_ID', 'unique' => 1)
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
			'MATERIAL_DE_EMBALAJE_ID' => 1,
			'NOMBRE_MATERIAL_DE_EMBALAJE' => 'Lorem ipsum dolor sit amet'
		),
	);

}
