<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/14/17
 * Time: 15:59
 */

class Post extends AppModel{
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );

    public function isOwnedBy($post, $user){
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }
}