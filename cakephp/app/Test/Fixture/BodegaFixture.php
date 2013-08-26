<?php
/**
 * BodegaFixture
 *
 */
class BodegaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'BODEGA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CATEGORIA_BODEGA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'BODEGA_ID', 'unique' => 1),
			'FK_RELATIONSHIP_53' => array('column' => 'ID', 'unique' => 0)
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
			'BODEGA_ID' => 1,
			'ID' => 1,
			'CATEGORIA_BODEGA' => 'Lorem ipsum dolor sit amet'
		),
	);

}
