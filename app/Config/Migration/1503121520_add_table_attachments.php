<?php
class AddTableAttachments extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_table_attachments';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
		    'create_table' => array(
		        'attachments' => array(
		            'id' => array(
		                'type' => 'integer',
                        'null' => false,
                        'length' => 10,
                        'unsigned' => true,
                        'key' => 'primary'
                    ),
                    'model' => array(
                        'type' => 'string',
                        'length' => 20,
                        'null' => false
                    ) ,
                    'foreign_key' => array(
                        'type' => 'integer',
                        'length' => 11,
                        'null' => false
                    ),
                    'photo_user' => array(
                        'type' => 'string',
                        'length' => 255,
                        'null' => false
                    ),
                    'dir' => array(
                        'type' => 'string',
                        'length' => 255,
                        'default' => null
                    ),
                    'type' => array(
                        'type' => 'string',
                        'length' => 255,
                        'default' => null
                    ),
                    'size' => array(
                        'type' => 'integer',
                        'length' => 11,
                        'default' => 0
                    ),
                    'active' => array(
                        'type' => 'tinyinteger',
                        'length' => 1,
                        'default' => 0
                    ),
                ),
            ),
        ),
		'down' => array(
			'drop_table' => array(
			    'attachments'
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
