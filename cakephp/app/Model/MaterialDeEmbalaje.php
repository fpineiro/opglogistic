<?php
App::uses('AppModel', 'Model');
/**
 * MaterialDeEmbalaje Model
 *
 */
class MaterialDeEmbalaje extends AppModel {
	public $hasMany = array(
		'DetalleGuiaDespachoEntradaProveedor' => array(
			'className' => 'DetalleGuiaDespachoEntradaProveedor',
			),
		'DetalleGuiaDespachoEntradaMaterialEmbalajeCliente' => array(
			'className' => 'DetalleGuiaDespachoEntradaMaterialEmbalajeCliente'
			),
		'CajaMaterialDeEmbalaje' => array(
			'className' => 'CajaMaterialDeEmbalaje'
			));
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'MATERIAL_DE_EMBALAJE_ID';

	public $validate = array(
		'NOMBRE_MATERIAL_DE_EMBALAJE' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Debe ingresar al menos un material'
            ),
		)
	);
}
