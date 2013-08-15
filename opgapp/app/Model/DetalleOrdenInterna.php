<?php
App::uses('AppModel', 'Model');
/**
 * DetalleOrdenInterna Model
 *
 */
class DetalleOrdenInterna extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ORDEN_INTERNA_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'MATERIAL_INTERMEDIO_ID' => array(
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
