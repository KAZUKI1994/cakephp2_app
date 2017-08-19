<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/15/17
 * Time: 20:31
 */
App::uses('AppController', 'Controller');

class ApiController extends AppController{
    public $uses = array('Post');

    public $components = array('RequestHandler');

    /**
     * 投稿一覧取得API
     * @return  arr
     */
    public function index(){
        $this->set('Posts', $this->Post->find('all'));
        $this->set('__serialize', array('Posts'));
    }

    public function search(){
        $this->set(array('Posts'), $this->Post->find('all'));
        $this->set(array(
            '__serialize' => array('Posts'),
            '__jsonp' => true
        ));
    }
}