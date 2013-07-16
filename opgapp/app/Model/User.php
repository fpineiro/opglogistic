<?php
class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
		'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
		'lastname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
		'mail' => array(
            'rule1' => array(
                'rule' => 'notEmpty',
                'message' => '*Requerido'
            ),
			'rule2' => array(
				'rule' => 'email',
				'message' => '*Ingrese un mail valido'
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