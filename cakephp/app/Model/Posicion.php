<?php
App::uses('AppModel', 'Model');
/**
 * Posicion Model
 *
 */
class Posicion extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'POSICION_ID';

	public $belongsTo = array(
		'Children' => array(
			'className' => 'Posicion',
			'foreignKey' => 'POS_POSICION_ID'
		),
		'Bodega' => array(
			'className' => 'Bodega',
			'foreignKey' => 'BODEGA_ID'
		)
	);

	public $hasMany = array(
		'CajaMaterialIndividual' => array(
			'className' => 'CajaMaterialIndividual',
			'foreignKey' => 'POSICION_ID'
		),
		'CajaMaterialDeEmbalaje' => array(
			'className' => 'CajaMaterialDeEmbalaje',
			'foreignKey' => 'POSICION_ID'
		),
		'CajaMaterialEmbalado' => array(
			'className' => 'CajaMaterialEmbalado',
			'foreignKey' => 'POSICION_ID'
		)
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'BODEGA_ID' => array(
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
