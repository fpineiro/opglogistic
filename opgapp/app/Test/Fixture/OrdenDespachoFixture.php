<?php
/**
 * OrdenDespachoFixture
 *
 */
class OrdenDespachoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ORDEN_DESPACHO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'GUIA_DESPACHO_SALIDA_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'ESTADO_AUTOMATA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CLIENTE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'FECHA_DETALLE_SOLICITUD_DESPACHO' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'DESTINO_DETALLE_SOLICITUD_DESPACHO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ORDEN_DESPACHO_ID', 'unique' => 1),
			'FK_RELATIONSHIP_33' => array('column' => 'CLIENTE_ID', 'unique' => 0),
			'FK_RELATIONSHIP_37' => array('column' => 'ESTADO_AUTOMATA_ID', 'unique' => 0),
			'FK_RELATIONSHIP_40' => array('column' => 'GUIA_DESPACHO_SALIDA_ID', 'unique' => 0)
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
			'GUIA_DESPACHO_SALIDA_ID' => 1,
			'ESTADO_AUTOMATA_ID' => 1,
			'CLIENTE_ID' => 1,
			'FECHA_DETALLE_SOLICITUD_DESPACHO' => 1376606348,
			'DESTINO_DETALLE_SOLICITUD_DESPACHO' => 'Lorem ipsum dolor sit amet'
		),
	);

}
