<?php
App::uses('AppModel', 'Model');
/**
 * DetalleSolicitudEmbalajeMaterialEmbalaje Model
 *
 */
class DetalleSolicitudEmbalajeMaterialEmbalaje extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'SOLICITUD_EMBALAJE_ID';

	public $belongsTo = array(
		'MaterialDeEmbalaje' => array(
			'className' => 'MaterialDeEmbalaje',
			'foreignKey' => 'MATERIAL_DE_EMBALAJE_ID'
		)
	);

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
