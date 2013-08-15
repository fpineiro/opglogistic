<?php
/**
 * DetalleSolicitudEmbalajeMaterialEmbalajeFixture
 *
 */
class DetalleSolicitudEmbalajeMaterialEmbalajeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SOLICITUD_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MATERIAL_DE_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CANTIDAD_DETALLE_SOLICITUD_EMBALAJE_MATERIAL_EMBALAJE' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'SOLICITUD_EMBALAJE_ID', 'unique' => 1),
			'FK_RELATIONSHIP_27' => array('column' => 'MATERIAL_DE_EMBALAJE_ID', 'unique' => 0)
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
			'MATERIAL_DE_EMBALAJE_ID' => 1,
			'CANTIDAD_DETALLE_SOLICITUD_EMBALAJE_MATERIAL_EMBALAJE' => 1
		),
	);

}
