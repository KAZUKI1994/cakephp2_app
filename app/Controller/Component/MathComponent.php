<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/19/17
 * Time: 13:13
 */

App::uses('Component', 'Controller');

class MathComponent extends Component{
    public function doComplexOperation($amount1, $amount2){
        return $amount1 + $amount2;
    }
}