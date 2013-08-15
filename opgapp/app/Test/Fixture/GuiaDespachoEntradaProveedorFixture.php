<?php
/**
 * GuiaDespachoEntradaProveedorFixture
 *
 */
class GuiaDespachoEntradaProveedorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GUIA_DESPACHO_PROVEEDOR_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'PROVEEDOR_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'FECHA_GUIA_DESPACHO_ENTRADA_PROVEEDOR' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GUIA_DESPACHO_PROVEEDOR_ID', 'unique' => 1),
			'FK_RELATIONSHIP_3' => array('column' => 'PROVEEDOR_ID', 'unique' => 0)
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
			'GUIA_DESPACHO_PROVEEDOR_ID' => 1,
			'PROVEEDOR_ID' => 1,
			'FECHA_GUIA_DESPACHO_ENTRADA_PROVEEDOR' => 1376606336
		),
	);

}
