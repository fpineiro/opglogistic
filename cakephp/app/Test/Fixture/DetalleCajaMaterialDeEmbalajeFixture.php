<?php
/**
 * DetalleCajaMaterialDeEmbalajeFixture
 *
 */
class DetalleCajaMaterialDeEmbalajeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CAJA_MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_CAJA_MATERIAL_DE_EMBALAJE' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CAJA_MATERIAL_DE_EMBALAJE_ID', 'unique' => 1),
			'FK_RELATIONSHIP_20' => array('column' => 'MATERIAL_DE_EMBALAJE_ID', 'unique' => 0)
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
			'CAJA_MATERIAL_DE_EMBALAJE_ID' => 1,
			'MATERIAL_DE_EMBALAJE_ID' => 1,
			'CANTIDAD_DETALLE_CAJA_MATERIAL_DE_EMBALAJE' => 1
		),
	);

}
