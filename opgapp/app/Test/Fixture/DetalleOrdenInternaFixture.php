<?php
/**
 * DetalleOrdenInternaFixture
 *
 */
class DetalleOrdenInternaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ORDEN_INTERNA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_INTERMEDIO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_ORDEN_INTERNA' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ORDEN_INTERNA_ID', 'unique' => 1),
			'FK_RELATIONSHIP_44' => array('column' => 'MATERIAL_INTERMEDIO_ID', 'unique' => 0)
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
			'ORDEN_INTERNA_ID' => 1,
			'MATERIAL_INTERMEDIO_ID' => 1,
			'CANTIDAD_DETALLE_ORDEN_INTERNA' => 1
		),
	);

}
