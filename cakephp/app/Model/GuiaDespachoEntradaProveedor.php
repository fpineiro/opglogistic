<?php
App::uses('AppModel', 'Model');
/**
 * GuiaDespachoEntradaProveedor Model
 *
 */
class GuiaDespachoEntradaProveedor extends AppModel {
	public $belongsTo = 'Proveedor';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'GUIA_DESPACHO_PROVEEDOR_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'GUIA_DESPACHO_PROVEEDOR_ID' => array(
			'unique' => array(
				'rule' => array('idGDPUnica'),
				'message' => 'Ya existe una guia de despacho con esa ID'
			),
			'natural' => array(
				'rule' => array('naturalNumber'),
				'message' => 'Este campo debe ser un entero positivo.'
			)
		),
	);

	public function idGDPUnica($check){
         $gdid = $this->find(
            'first',
            array(
                'fields' => array(
                    'GuiaDespachoEntradaProveedor.GUIA_DESPACHO_PROVEEDOR_ID',
                ),
                'conditions' => array(
                    'GuiaDespachoEntradaProveedor.GUIA_DESPACHO_PROVEEDOR_ID' => $check['GUIA_DESPACHO_PROVEEDOR_ID'],
                ),
            )
        );
        if(!empty($gdid)){
            if($this->data[$this->alias]['GUIA_DESPACHO_PROVEEDOR_ID'] == $gdid['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID']){
                return false;
            }else{
                return true;
            }
        }else{
            return true;
        }
    }
}
?>