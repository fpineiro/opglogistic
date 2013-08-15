<?php
/**
 * OrdenCompraFixture
 *
 */
class OrdenCompraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ORDEN_COMPRA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'PROVEEDOR_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'PROCESADA_ORDEN_COMPRA' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'FECHA_ORDEN_COMPRA' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ORDEN_COMPRA_ID', 'unique' => 1),
			'FK_RELATIONSHIP_4' => array('column' => 'PROVEEDOR_ID', 'unique' => 0)
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
			'PROVEEDOR_ID' => 1,
			'PROCESADA_ORDEN_COMPRA' => 1,
			'FECHA_ORDEN_COMPRA' => 1376606346
		),
	);

}
