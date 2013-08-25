<?php
App::uses('AppModel', 'Model');
/**
 * CajaMaterialDeEmbalaje Model
 *
 */
class CajaMaterialDeEmbalaje extends AppModel {
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
	public $primaryKey = 'CAJA_MATERIAL_DE_EMBALAJE_ID';

}
