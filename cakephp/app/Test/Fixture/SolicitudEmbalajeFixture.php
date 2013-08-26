<?php
/**
 * SolicitudEmbalajeFixture
 *
 */
class SolicitudEmbalajeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SOLICITUD_EMBALAJE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ESTADO_AUTOMATA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'CLIENTE_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'FECHA_DETALLE_SOLICITUD_EMBALAJE' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'SOLICITUD_EMBALAJE_ID', 'unique' => 1),
			'FK_RELATIONSHIP_1' => array('column' => 'CLIENTE_ID', 'unique' => 0),
			'FK_RELATIONSHIP_36' => array('column' => 'ESTADO_AUTOMATA_ID', 'unique' => 0)
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
			'ESTADO_AUTOMATA_ID' => 1,
			'CLIENTE_ID' => 1,
			'FECHA_DETALLE_SOLICITUD_EMBALAJE' => 1376606355,
			'CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE' => 1
		),
	);

}
