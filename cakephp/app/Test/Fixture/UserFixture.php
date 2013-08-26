<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'BODEGA_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'CLIENTE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'USERNAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PASSWORD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'LASTNAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'MAIL' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ROLE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CREATED' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'MODIFIED' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'FK_RELATIONSHIP_51' => array('column' => 'CLIENTE_ID', 'unique' => 0),
			'FK_RELATIONSHIP_54' => array('column' => 'BODEGA_ID', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID' => 1,
			'BODEGA_ID' => 1,
			'CLIENTE_ID' => 1,
			'USERNAME' => 'Lorem ipsum dolor sit amet',
			'PASSWORD' => 'Lorem ipsum dolor sit amet',
			'NAME' => 'Lorem ipsum dolor sit amet',
			'LASTNAME' => 'Lorem ipsum dolor sit amet',
			'MAIL' => 'Lorem ipsum dolor sit amet',
			'ROLE' => 'Lorem ipsum dolor ',
			'CREATED' => '2013-08-16 00:39:17',
			'MODIFIED' => '2013-08-16 00:39:17'
		),
	);

}
