<?php
/**
 * DetalleGuiaDespachoEntradaMaterialEmbalajeClienteFixture
 *
 */
class DetalleGuiaDespachoEntradaMaterialEmbalajeClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GUIA_DESPACHO_CLIENTE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'CAJA_MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_EMBALAJE_CLIENTE' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GUIA_DESPACHO_CLIENTE_ID', 'unique' => 1),
			'FK_RELATIONSHIP_30' => array('column' => 'MATERIAL_DE_EMBALAJE_ID', 'unique' => 0),
			'FK_RELATIONSHIP_57' => array('column' => 'CAJA_MATERIAL_DE_EMBALAJE_ID', 'unique' => 0)
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
			'GUIA_DESPACHO_CLIENTE_ID' => 1,
			'CAJA_MATERIAL_DE_EMBALAJE_ID' => 1,
			'MATERIAL_DE_EMBALAJE_ID' => 1,
			'CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_EMBALAJE_CLIENTE' => 1
		),
	);

}
