<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/14/17
 * Time: 19:24
 */

class SeaShell extends AppShell{
    public $tasks = array('Sound');
    public function main(){
        $this->Sound->execute();
    }
}