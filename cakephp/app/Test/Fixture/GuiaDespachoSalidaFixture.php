<?php
/**
 * GuiaDespachoSalidaFixture
 *
 */
class GuiaDespachoSalidaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GUIA_DESPACHO_SALIDA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ORDEN_DESPACHO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'DESPACHO_CAMION_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'FECHA_DETALLE_GUIA_DESPACHO_SALIDA' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GUIA_DESPACHO_SALIDA_ID', 'unique' => 1),
			'FK_RELATIONSHIP_41' => array('column' => 'ORDEN_DESPACHO_ID', 'unique' => 0),
			'FK_RELATIONSHIP_42' => array('column' => 'DESPACHO_CAMION_ID', 'unique' => 0)
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
			'GUIA_DESPACHO_SALIDA_ID' => 1,
			'ORDEN_DESPACHO_ID' => 1,
			'DESPACHO_CAMION_ID' => 1,
			'FECHA_DETALLE_GUIA_DESPACHO_SALIDA' => 1376606337
		),
	);

}
