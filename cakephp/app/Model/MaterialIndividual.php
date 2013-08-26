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
    
	public $validate = array(
		'NOMBRE_MATERIAL_INDIVIDUAL'=>array(
				'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Se requiere al menos un material'
            	)
				
            ),
 
				'unique' => array(
                'rule' => array('usuarioUnico'),
                'message' => 'Material ya existe en'
		  )

	);



	function usuarioUnico($check){
         $user = $this->find(
            'first',
            array(
                'fields' => array(
                    'MaterialIndividual.MATERIAL_INDIVIDUAL_ID',
                    'MaterialIndividual.NOMBRE_MATERIAL_INDIVIDUAL'
                ),
                'conditions' => array(
                    'MaterialIndividual.NOMBRE_MATERIAL_INDIVIDUAL' => $check['NOMBRE_MATERIAL_INDIVIDUAL']
                )
            )
        );
        if(!empty($MaterialIndividual)){
            if($this->data[$this->alias]['MATERIAL_INDIVIDUAL_ID'] == $MaterialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID']){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }
}
