<?php
App::uses('AppModel', 'Model');
/**
 * Compatibilidad Model
 *
 */
class Compatibilidad extends AppModel {
	public $hasMany = array(
		'MaterialIntermedio' => array(
			'className' => 'MaterialIntermedio',
			'foreignKey' => 'MATERIAL_INTERMEDIO_ID'
		),
		'MaterialDeEmbalaje' => array(
			'className' => 'MaterialDeEmbalaje',
			'foreignKey' => 'MATERIAL_DE_EMBALAJE_ID'
		)
		);
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'COMPATIBILIDAD_ID';

/**
 * Validation rules
 *
 * @var array
 */
		
}
