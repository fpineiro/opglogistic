<?php

class Student extends AppModel{
	public $validate = array(
		'name' => array(
			'allowEmpty' => false,
			'message'	 => 'El nombre no puede ser vacio'
		),
		'last_name' => array(
			'allowEmpty' => false,
			'message'	 => 'El apellido no puede ser vacio'
		),
	);

	public $hasAndBelongsToMany = array(
		'Course'=>array(
			'classname'=>'Course',
			'joinTable'=>'students_courses',
			'foreignKey'=>'student_id',
			'associationForeignKey'=>'course_id'
		)
	);
}

?>