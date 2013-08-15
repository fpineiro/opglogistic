<?php
App::uses('AppModel', 'Model');
/**
 * DetalleGuiaDespachoEntradaProveedor Model
 *
 */
class DetalleGuiaDespachoEntradaProveedor extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'GUIA_DESPACHO_PROVEEDOR_ID';

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
