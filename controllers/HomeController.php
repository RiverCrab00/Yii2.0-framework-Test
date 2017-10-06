<?php
namespace app\controllers;
use yii\web\Controller;
class HomeController extends Controller{
    public $enableCsrfValidation=false;
    function actionIndex(){
        $request=\Yii::$app->request;
        $id=$request->userIP;
        dd($id);
    }
    function actionTest(){
        $arr=[
            'name'=>'john',
            'age'=>'22'
        ];
        p($arr);
    }
}