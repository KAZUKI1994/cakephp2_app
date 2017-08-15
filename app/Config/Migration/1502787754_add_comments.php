<?php
class AddComments extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_comments';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
		    'create_table' => array(
		        'comments' => array(
		            'id' => array(
		                'type' => 'integer',
                        'null' => false,
                        'default' => null,
                        'length' => 10,
                        'unsigned' => true,
                        'key' => 'primary'
                    ),
                    'user_id' => array(
                        'type' => 'integer',
                        'null' => true,
                        'default' => null,
                        'unsigned' => false
                    ),
                ),
            ),
		),
		'down' => array(
		    'drop_table' => array(
		        'comments'
            ),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
