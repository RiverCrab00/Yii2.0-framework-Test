<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2017/10/6
 * Time: 19:13
 */
function p($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
function dd($arr){
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
    die;
}