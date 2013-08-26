<?php
/**
 * DetalleCajaMaterialEmbaladoFixture
 *
 */
class DetalleCajaMaterialEmbaladoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CAJA_MATERIAL_EMBALADO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_INTERMEDIO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_CAJA_MATERIAL_EMBALADO' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CAJA_MATERIAL_EMBALADO_ID', 'unique' => 1),
			'FK_RELATIONSHIP_22' => array('column' => 'MATERIAL_INTERMEDIO_ID', 'unique' => 0)
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
			'CAJA_MATERIAL_EMBALADO_ID' => 1,
			'MATERIAL_INTERMEDIO_ID' => 1,
			'CANTIDAD_DETALLE_CAJA_MATERIAL_EMBALADO' => 1
		),
	);

}
