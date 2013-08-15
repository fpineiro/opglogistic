<?php
App::uses('AppModel', 'Model');
/**
 * DetalleCajaMaterialEmbalado Model
 *
 */
class DetalleCajaMaterialEmbalado extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'CAJA_MATERIAL_EMBALADO_ID';

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
