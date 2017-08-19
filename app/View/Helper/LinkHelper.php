<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/15/17
 * Time: 19:54
 */
App::uses('AppHelper', 'View/Helper');

class LinkHelper extends AppHelper{
    public $helpers = array('Html');

    public function makeEdit($title, $url){
        $link = $this->Html->link($title, $url, array('class' => 'edit'));

        return '<div class="editOuter">' . $link . '</div>';
    }
}