<?php
App::uses('AppModel', 'Model');
/**
 * DetalleOrdenCompra Model
 *
 */
class DetalleOrdenCompra extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ORDEN_COMPRA_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'MATERIAL_DE_EMBALAJE_ID' => array(
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
