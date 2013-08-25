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
            ),
            'unique' => array(
                'rule' => array('usuarioUnico'),
                'message' => 'El nombre de usuario ya existe'
            )
        ),
        'PASSWORD' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
        'PASSWORD_CONFIRMA' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Por favor confirme su contraseña'
                ),
            'iguala' => array(
                'rule' => array('esIgual', 'PASSWORD'),
                'message' => 'La contraseña no coincide.'
                )
        ),
		'NAME' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            ),
            'texto' => array(
                'rule' => array('validaNombre', 'NAME'),
                'message' => '*Nombre inválido'
            )
        ),
		'LASTNAME' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            ),
            'texto' => array(
                'rule' => array('validaNombre', 'LASTNAME'),
                'message' => '*Apellido inválido'
            )
        ),
		'MAIL' => array(
            'noVacio' => array(
                'rule' => 'notEmpty',
                'message' => '*Requerido'
            ),
			'esMail' => array(
				'rule' => 'email',
				'message' => '*Ingrese un mail valido'
			),
            'unique' => array(
                'rule' => array('mailUnico'),
                'message' => 'El e-mail ya está registrado en el sistema'
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
	
    function usuarioUnico($check){
         $user = $this->find(
            'first',
            array(
                'fields' => array(
                    'User.ID',
                    'User.USERNAME'
                ),
                'conditions' => array(
                    'User.USERNAME' => $check['USERNAME']
                )
            )
        );
        if(!empty($user)){
            if($this->data[$this->alias]['ID'] == $user['User']['ID']){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }

    function mailUnico($check){
         $mail = $this->find(
            'first',
            array(
                'fields' => array(
                    'User.ID',
                    'User.MAIL'
                ),
                'conditions' => array(
                    'User.MAIL' => $check['MAIL']
                )
            )
        );
        if(!empty($mail)){
            if($this->data[$this->alias]['ID'] == $mail['User']['ID']){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }

    public function esIgual($check, $campo)
    {
        $fname = '';
        foreach ($check as $key => $value){
            $fname = $key;
            break;
        }
        return $this->data[$this->name][$campo] === $this->data[$this->name][$fname];
    } 

	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['PASSWORD'])) {
        $this->data[$this->alias]['PASSWORD'] = AuthComponent::password($this->data[$this->alias]['PASSWORD']);
    }
    return true;
	}

    public function validaNombre($str,$campo){
        if(preg_match("/^[a-zA-Z]+$/",$str[$campo])==1) return true; 
        else return false;
    }


}
?>