<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/14/17
 * Time: 19:17
 */

class UserShell extends AppShell{
    public $uses = array('User');
    public $tasks = array('Template');

    public function show(){
        $user = $this->User->findByUsername($this->args[0]);
        $this->out(print_r($user, true));
    }
}