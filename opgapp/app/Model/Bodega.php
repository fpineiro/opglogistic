<?php
App::uses('AppModel', 'Model');
/**
 * Bodega Model
 *
 */
class Bodega extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'BODEGA_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ID' => array(
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
