<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 */
class Cliente extends AppModel {
	public $hasOne = 'User';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'CLIENTE_ID';

/**
 * Validation rules
 *
 * @var array
 */

	public $validate = array(
		'ID' => array(
			'numeric' => array(
				'rule' => array('numeric')
			),
		),
        'NOMBRE_CLIENTE' => array(
            'rule1' => array(
                'rule' => 'notEmpty',
  				'message' => 'Complete este campo'
            ),
			'rule2' => array(
				'rule' => 'isUnique',
				'message' => '*El nombre de cliente ya existe'
			)
        ),
        'DIRECCION_CLIENTE' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
		'TELEFONO_CONTACTO_CLIENTE' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '*Requerido'
            )
        ),
		'EMAIL_CLIENTE' => array(
            'rule3' => array(
                'rule' => 'notEmpty',
                'message' => '*Requerido'
            ),
			'rule4' => array(
				'rule' => 'email',
				'message' => '*Ingrese un mail valido'
			)
        )
    );
}
