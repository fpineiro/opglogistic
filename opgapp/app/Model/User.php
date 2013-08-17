<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
    public $hasOne = array(
        'Cliente' => array(
            'className' => 'Cliente',
            'foreignKey' => 'ID'
        )
    );
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID';

	public $validate = array(
        'USERNAME' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
        'PASSWORD' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
		'NAME' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
		'LASTNAME' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
		'MAIL' => array(
            'rule1' => array(
                'rule' => 'notEmpty',
                'message' => '*Requerido'
            ),
			'rule2' => array(
				'rule' => 'email',
				'message' => '*Ingrese un mail valido'
			)
        ),
        'ROLE' => array(
            'valid' => array(
                'rule' => array('inList', array('cliente', 'jb', 'admin')),
                'message' => 'Easter egg.',
                'allowEmpty' => false
            )
        )
    );
	
	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['PASSWORD'])) {
        $this->data[$this->alias]['PASSWORD'] = AuthComponent::password($this->data[$this->alias]['PASSWORD']);
    }
    return true;
	}

}
?>