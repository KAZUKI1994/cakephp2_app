<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/19/17
 * Time: 15:09
 */

class Attachment extends AppModel{

    public $actsAs = array(
        'Upload.Upload' => array(
            'photo_user' => array(
                'thumbnailSizes' => array(
                    'thumb150' => '150x150',
                    'thumb80' => '80x80',
                ),
                'thumbnailMethod' => 'php',
                'field' => array(
                    'dir' => 'dir',
                    'type' => 'type',
                    'size' => 'size',
                ),
                'mimetypes' => array(
                    'image/jpeg',
                    'image/gif',
                    'image/png'
                ),
                'extensions' => array('jpg','jpeg','JPG','JPEG','gif','GIF','png','PNG'),
                'mazSize' => 2097152, //2MB
            ),
            'thumbnailMethod' => 'php',
            'fields' => array(
                'dir' => 'dir',
                'type' => 'type',
                'size' => 'size'
            ),
        ),
    );

    public $belogsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'foreign_key',
        ),
    );
}