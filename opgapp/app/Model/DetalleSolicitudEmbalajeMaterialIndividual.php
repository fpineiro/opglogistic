<?php
App::uses('AppModel', 'Model');
/**
 * DetalleSolicitudEmbalajeMaterialIndividual Model
 *
 */
class DetalleSolicitudEmbalajeMaterialIndividual extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'SOLICITUD_EMBALAJE_ID';

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
	);
}
