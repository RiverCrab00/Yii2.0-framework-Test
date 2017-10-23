<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2017/10/7
 * Time: 21:26
 */
namespace app\controllers;
use yii\web\Controller;
use yii\helpers\Url;
class MsgController extends Controller{
    public function actionIndex(){
        $this->layout=false;
        return $this->render('index');
    }
    public function actionTest(){
        $res=\Yii::$app->response;
        //$res->statusCode='500';
        //$res->headers->add('pragma','no-cache');
        //$res->headers->add('location','http://www.baidu.com');
        //$res->headers->remove('location');
        //return $this->redirect('http://segmentfault.com/');
    }
    public function actionUrl(){
        echo Url::base(true);
        echo '<br>';
        echo Url::home(true);
        echo '<br>';
        echo Url::current();
        echo '<br>';
        //不写控制器,就以当前的控制器名称
        dump(Url::to(['site/index']));
        dump(Url::to(['site/index'],true));
        dump(Url::to(['site/index','id'=>2,'type'=>3],true));
        dump(Url::toRoute(['site/index'],true));
        dump(Url::to('site/index'));
        dump(Url::toRoute('site/index'));
    }
	 public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'maxLength' => 5,
                'minLength' => 5
            ],
        ];
    }

}