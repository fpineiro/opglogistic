<?php
App::uses('AppModel', 'Model');
/**
 * MaterialIndividual Model
 *
 */
class MaterialIndividual extends AppModel {
	public $hasMany = 'DetalleGuiaDespachoEntradaMaterialIndividualCliente';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'MATERIAL_INDIVIDUAL_ID';

}
