<?php
/**
 * DetalleGuiaDespachoSalidaFixture
 *
 */
class DetalleGuiaDespachoSalidaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GUIA_DESPACHO_SALIDA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_INTERMEDIO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_GUIA_DESPACHO_SALIDA' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GUIA_DESPACHO_SALIDA_ID', 'unique' => 1),
			'FK_RELATIONSHIP_45' => array('column' => 'MATERIAL_INTERMEDIO_ID', 'unique' => 0)
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
			'MATERIAL_INTERMEDIO_ID' => 1,
			'CANTIDAD_DETALLE_GUIA_DESPACHO_SALIDA' => 1
		),
	);

}
