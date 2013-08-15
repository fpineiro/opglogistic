<?php
class Noticia extends AppModel {
        public $name = 'Noticia';
		
		public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>