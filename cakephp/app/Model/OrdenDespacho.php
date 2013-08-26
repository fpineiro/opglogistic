<?php
App::uses('AppModel', 'Model');
/**
 * OrdenDespacho Model
 *
 */
class OrdenDespacho extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ORDEN_DESPACHO_ID';
	public $hasMany = 'DetalleOrdenDespacho';
	public $belongsTo = 'Cliente';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ESTADO_AUTOMATA_ID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'CLIENTE_ID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
