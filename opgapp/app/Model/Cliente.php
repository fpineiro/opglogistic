<?php
class Cliente extends AppModel {
    var $primaryKey = 'cliente_id';
    
    public $validate = array(
        'nombre_cliente' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
        'direccion_cliente' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
        'telefono_contacto_cliente' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
        'email_cliente' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('cliente', 'jb', 'admin')),
                'message' => 'Easter egg.',
                'allowEmpty' => false
            )
        )
    );
	
	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
	}
}
?>