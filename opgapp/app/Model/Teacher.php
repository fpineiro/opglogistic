<?php

class Teacher extends AppModel{
	//public $displayField = 'name'; //title, name
	public $virtualFields = array(
    	'name' => 'CONCAT(Teacher.name, " ", Teacher.last_name)'
	);
	public $hasMany = array(
		'Course'=>array(
			'className'=>'Course',
			'foreignKey'=>'teacher_id',
			'dependent'=>true //borrar en cascada
			)
		);
}

?>
