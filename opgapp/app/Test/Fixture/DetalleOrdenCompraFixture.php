<?php
/**
 * DetalleOrdenCompraFixture
 *
 */
class DetalleOrdenCompraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ORDEN_COMPRA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_ORDEN_COMPRA' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ORDEN_COMPRA_ID', 'unique' => 1),
			'FK_RELATIONSHIP_32' => array('column' => 'MATERIAL_DE_EMBALAJE_ID', 'unique' => 0)
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
			'ORDEN_COMPRA_ID' => 1,
			'MATERIAL_DE_EMBALAJE_ID' => 1,
			'CANTIDAD_DETALLE_ORDEN_COMPRA' => 1
		),
	);

}
