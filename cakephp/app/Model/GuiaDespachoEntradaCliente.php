<?php
App::uses('AppModel', 'Model');
/**
 * GuiaDespachoEntradaCliente Model
 *
 */
class GuiaDespachoEntradaCliente extends AppModel {
	public $belongsTo = 'Cliente';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'GUIA_DESPACHO_CLIENTE_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'CLIENTE_ID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'GUIA_DESPACHO_CLIENTE_ID'=> array(
			'positivo' => array(
            	'rule' => array('validaPositivo'),
                'message' => '*Identificador de guía de despacho inválido (debe ser un número)'
            )
         )
	);
	public function validaPositivo($num){
        if(preg_match('/^\d+$/', $num['GUIA_DESPACHO_CLIENTE_ID'])==1) return true;
        else return false;
    }
}
