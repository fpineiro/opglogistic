<?php
App::uses('AppModel', 'Model');
/**
 * CajaMaterialIndividual Model
 *
 */
class CajaMaterialIndividual extends AppModel {
	public $belongsTo = array(
		'MaterialIndividual' => array(
			'className' => 'MaterialIndividual',
			'foreignKey' => 'MATERIAL_INDIVIDUAL_ID'
		),
		'Posicion' => array(
			'className' => 'Posicion',
			'foreignKey' => 'POSICION_ID'
		)
	);
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'CAJA_MATERIAL_INDIVIDUAL_ID';

}
