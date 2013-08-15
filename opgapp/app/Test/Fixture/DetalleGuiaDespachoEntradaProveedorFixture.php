<?php
/**
 * DetalleGuiaDespachoEntradaProveedorFixture
 *
 */
class DetalleGuiaDespachoEntradaProveedorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GUIA_DESPACHO_PROVEEDOR_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CAJA_MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_GUIA_DESPACHO_ENTRADA_PROVEEDORES' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GUIA_DESPACHO_PROVEEDOR_ID', 'unique' => 1),
			'FK_RELATIONSHIP_31' => array('column' => 'MATERIAL_DE_EMBALAJE_ID', 'unique' => 0),
			'FK_RELATIONSHIP_58' => array('column' => 'CAJA_MATERIAL_DE_EMBALAJE_ID', 'unique' => 0)
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
			'MATERIAL_DE_EMBALAJE_ID' => 1,
			'CAJA_MATERIAL_DE_EMBALAJE_ID' => 1,
			'CANTIDAD_DETALLE_GUIA_DESPACHO_ENTRADA_PROVEEDORES' => 1
		),
	);

}
