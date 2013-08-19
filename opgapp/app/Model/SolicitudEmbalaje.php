<?php
App::uses('AppModel', 'Model');
/**
 * SolicitudEmbalaje Model
 *
 */
class SolicitudEmbalaje extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'SOLICITUD_EMBALAJE_ID';

	public $belongsTo = array(
		'EstadoAutomata' => array(
			'className' => 'EstadoAutomata',
			'foreignKey' => 'ESTADO_AUTOMATA_ID'
		),
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'CLIENTE_ID'
		)
	);

	public $hasMany = array(
		'DetalleSolicitudEmbalajeMaterialEmbalaje' => array(
			'className' => 'DetalleSolicitudEmbalajeMaterialEmbalaje',
			'foreignKey' => 'SOLICITUD_EMBALAJE_ID',
			'dependent' => 'true'
		),
		'DetalleSolicitudEmbalajeMaterialIndividual' => array(
			'className' => 'DetalleSolicitudEmbalajeMaterialIndividual',
			'foreignKey' => 'SOLICITUD_EMBALAJE_ID',
			'dependent' => 'true'
		),
		'DetalleSolicitudEmbalajeMaterialIntermedio' => array(
			'className' => 'DetalleSolicitudEmbalajeMaterialIntermedio',
			'foreignKey' => 'SOLICITUD_EMBALAJE_ID',
			'dependent' => 'true'
		)
	);

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
