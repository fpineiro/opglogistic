<?php
App::uses('AppModel', 'Model');
/**
 * DetalleGuiaDespachoEntradaMaterialEmbalajeCliente Model
 *
 */
class DetalleGuiaDespachoEntradaMaterialEmbalajeCliente extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'GUIA_DESPACHO_CLIENTE_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'CAJA_MATERIAL_DE_EMBALAJE_ID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
