<?php

class Course extends AppModel{
	 public $displayField = "name";
	 public $belongsTo = array(
	 	'Teacher'=>array(
	 		'className'=>'Teacher',
	 		'foreignKey'=>'teacher_id'
	 	)
	 );

	 public $hasAndBelongsToMany = array(
	 	'Student'=>array(
	 		'classname'=>'Student',
	 		'joinTable'=>'students_courses',
	 		'foreignKey'=>'course_id',
	 		'associationForeignKey'=>'student_id'
	 	)
	 );
}

?>
