<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/14/17
 * Time: 19:12
 */

class HelloShell extends AppShell{
    public function main(){
        $this->out('Hello World.');
    }

    public function hey_there(){
        $this->out('Hey there' . $this->args[0]);
    }
}