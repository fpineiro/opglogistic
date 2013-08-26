<?php
App::uses('AppModel', 'Model');
/**
 * DetalleGuiaDespachoEntradaMaterialEmbalajeCliente Model
 *
 */
class DetalleGuiaDespachoEntradaMaterialEmbalajeCliente extends AppModel {
	public $belongsTo = array(
		'MaterialDeEmbalaje' => array(
			'className' => 'MaterialDeEmbalaje',
			'foreignKey' => 'MATERIAL_DE_EMBALAJE_ID'
		),
		'GuiaDespachoEntradaCliente' => array(
			'className' => 'GuiaDespachoEntradaCliente',
			'foreignKey' => 'GUIA_DESPACHO_CLIENTE_ID'
		)
		);
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'DETALLE_GD_ENTRADA_ME_CL_ID';

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
