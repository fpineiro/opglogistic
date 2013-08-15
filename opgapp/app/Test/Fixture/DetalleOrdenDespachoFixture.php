<?php
/**
 * DetalleOrdenDespachoFixture
 *
 */
class DetalleOrdenDespachoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ORDEN_DESPACHO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_INTERMEDIO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_ORDEN_DESPACHO' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ORDEN_DESPACHO_ID', 'unique' => 1),
			'FK_RELATIONSHIP_43' => array('column' => 'MATERIAL_INTERMEDIO_ID', 'unique' => 0)
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
			'ORDEN_DESPACHO_ID' => 1,
			'MATERIAL_INTERMEDIO_ID' => 1,
			'CANTIDAD_DETALLE_ORDEN_DESPACHO' => 1
		),
	);

}
