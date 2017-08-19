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

    /**
     * 画像URLを生成する
     * @param $prop プロパティ名（ex. photo_user, photo_post）
     * @param $dir ディレクトリパス
     * @param $filename ファイル名
     * @return url
     */
    public function imageurl($prop, $dir, $filename){
        $url = "/files/attachment/$prop/{$dir}/{$filename}";
        return $url;
    }
}