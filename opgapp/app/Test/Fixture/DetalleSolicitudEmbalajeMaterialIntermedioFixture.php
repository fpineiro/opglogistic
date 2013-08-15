<?php
/**
 * DetalleSolicitudEmbalajeMaterialIntermedioFixture
 *
 */
class DetalleSolicitudEmbalajeMaterialIntermedioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SOLICITUD_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_INTERMEDIO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_MATERIAL_INTERMEDIO_DETALLE_SOLICITUD_EMBALAJE' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'SOLICITUD_EMBALAJE_ID', 'unique' => 1),
			'FK_RELATIONSHIP_26' => array('column' => 'MATERIAL_INTERMEDIO_ID', 'unique' => 0)
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
			'SOLICITUD_EMBALAJE_ID' => 1,
			'MATERIAL_INTERMEDIO_ID' => 1,
			'CANTIDAD_MATERIAL_INTERMEDIO_DETALLE_SOLICITUD_EMBALAJE' => 1
		),
	);

}
