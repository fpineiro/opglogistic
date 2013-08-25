<?php
App::uses('AppModel', 'Model');
/**
 * MaterialIndividual Model
 *
 */
class MaterialIndividual extends AppModel {
	public $hasMany = array(
		'DetalleGuiaDespachoEntradaMaterialIndividualCliente' => array(
			'className' => 'DetalleGuiaDespachoEntradaMaterialIndividualCliente'
			),
		'CajaMaterialIndividual' => array(
			'className' => 'CajaMaterialIndividual'
			));
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'MATERIAL_INDIVIDUAL_ID';

}
