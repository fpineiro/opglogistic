<?php
/**
 * OrdenInternaFixture
 *
 */
class OrdenInternaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ORDEN_INTERNA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'BODEGA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'ESTADO_AUTOMATA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'ORDEN_DESPACHO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'FECHA_DETALLE_ORDEN_INTERNA' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ORDEN_INTERNA_ID', 'unique' => 1),
			'FK_RELATIONSHIP_38' => array('column' => 'ESTADO_AUTOMATA_ID', 'unique' => 0),
			'FK_RELATIONSHIP_39' => array('column' => 'ORDEN_DESPACHO_ID', 'unique' => 0),
			'FK_RELATIONSHIP_62' => array('column' => 'BODEGA_ID', 'unique' => 0)
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
			'BODEGA_ID' => 1,
			'ESTADO_AUTOMATA_ID' => 1,
			'ORDEN_DESPACHO_ID' => 1,
			'FECHA_DETALLE_ORDEN_INTERNA' => 1376606350
		),
	);

}
