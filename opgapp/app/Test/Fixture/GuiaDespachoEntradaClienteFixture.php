<?php
/**
 * GuiaDespachoEntradaClienteFixture
 *
 */
class GuiaDespachoEntradaClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GUIA_DESPACHO_CLIENTE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'CLIENTE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'FECHA_DETALLE_GUIA_DESPACHO_ENTRADA_CLIENTE' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GUIA_DESPACHO_CLIENTE_ID', 'unique' => 1),
			'FK_RELATIONSHIP_2' => array('column' => 'CLIENTE_ID', 'unique' => 0)
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
			'CLIENTE_ID' => 1,
			'FECHA_DETALLE_GUIA_DESPACHO_ENTRADA_CLIENTE' => 1376606334,
			'CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES' => 1
		),
	);

}
