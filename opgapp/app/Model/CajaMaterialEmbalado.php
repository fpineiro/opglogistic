<?php
App::uses('AppModel', 'Model');
/**
 * CajaMaterialEmbalado Model
 *
 */
class CajaMaterialEmbalado extends AppModel {
	public $belongsTo = array(
		'MaterialDeEmbalaje' => array(
			'className' => 'MaterialDeEmbalaje',
			'foreignKey' => 'MATERIAL_DE_EMBALAJE_ID'
		),
		'Posicion' => array(
			'className' => 'Posicion',
			'foreignKey' => 'POSICION_ID'
		),
		'GuiaDespachoEntradaCliente' => array(
			'className' => 'GuiaDespachoEntradaCliente',
			'foreignKey' => 'GUIA_DESPACHO_CLIENTE_ID'
		)
	);
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'CAJA_MATERIAL_EMBALADO_ID';

}
