<?php
/**
 * AuditoriaFixture
 *
 */
class AuditoriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'AUDITORIA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'FECHA_AUDITORIA' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'USUARIO_AUDITORIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DATOS_ANTERIORES_AUDITORIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DATOS_NUEVOS_AUDITORIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CONSULTA_AUDITORIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'OPERACION_AUDITORIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'TABLA_MODIFICADA_AUDITORIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'AUDITORIA_ID', 'unique' => 1)
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
			'AUDITORIA_ID' => 1,
			'FECHA_AUDITORIA' => 1376606289,
			'USUARIO_AUDITORIA' => 'Lorem ipsum dolor sit amet',
			'DATOS_ANTERIORES_AUDITORIA' => 'Lorem ipsum dolor sit amet',
			'DATOS_NUEVOS_AUDITORIA' => 'Lorem ipsum dolor sit amet',
			'CONSULTA_AUDITORIA' => 'Lorem ipsum dolor sit amet',
			'OPERACION_AUDITORIA' => 'Lorem ip',
			'TABLA_MODIFICADA_AUDITORIA' => 'Lorem ipsum dolor '
		),
	);

}
