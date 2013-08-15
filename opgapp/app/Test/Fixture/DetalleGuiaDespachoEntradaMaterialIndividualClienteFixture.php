<?php
/**
 * DetalleGuiaDespachoEntradaMaterialIndividualClienteFixture
 *
 */
class DetalleGuiaDespachoEntradaMaterialIndividualClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GUIA_DESPACHO_CLIENTE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_INDIVIDUAL_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CAJA_MATERIAL_INDIVIDUAL_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_INDIVIDUAL_CLIENTE' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GUIA_DESPACHO_CLIENTE_ID', 'unique' => 1),
			'FK_RELATIONSHIP_55' => array('column' => 'MATERIAL_INDIVIDUAL_ID', 'unique' => 0),
			'FK_RELATIONSHIP_59' => array('column' => 'CAJA_MATERIAL_INDIVIDUAL_ID', 'unique' => 0)
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
			'MATERIAL_INDIVIDUAL_ID' => 1,
			'CAJA_MATERIAL_INDIVIDUAL_ID' => 1,
			'CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_INDIVIDUAL_CLIENTE' => 1
		),
	);

}
