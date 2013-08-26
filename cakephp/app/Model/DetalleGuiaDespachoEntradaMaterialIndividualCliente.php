<?php
App::uses('AppModel', 'Model');
/**
 * DetalleGuiaDespachoEntradaMaterialIndividualCliente Model
 *
 */
class DetalleGuiaDespachoEntradaMaterialIndividualCliente extends AppModel {
	public $belongsTo = array(
		'MaterialIndividual' => array(
			'className' => 'MaterialIndividual',
			'foreignKey' => 'MATERIAL_INDIVIDUAL_ID'
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
	public $primaryKey = 'DETALLE_GD_ENTRADA_MI_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'MATERIAL_INDIVIDUAL_ID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'CAJA_MATERIAL_INDIVIDUAL_ID' => array(
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
