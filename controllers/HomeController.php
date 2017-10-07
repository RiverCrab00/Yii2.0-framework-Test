<?php
namespace app\controllers;
use app\models\Stu_info;
use app\models\Student;
use yii\web\Controller;
class HomeController extends Controller{
    //public $enableCsrfValidation=false;
    function actionIndex(){
        /*$request=\Yii::$app->request;
        $id=$request->userIP;
        dd($id)*/;
        $request=\Yii::$app->request;
        $id=$request->get('id');
        /*$sql='select *from student where id=:id';
        $res=Student::findBySql($sql,[':id'=>$id])->all();*/
        /*foreach(Student::find()->batch(5) as $data){
            echo count($data);
        }*/
        $data=Student::find()->asArray()->where(['id'=>1])->all();
        dd($data);

    }
    function actionTest(){
        $arr=[
            'name'=>'john',
            'age'=>'22'
        ];
        p($arr);
    }
    function actionInsert(){
        $stu=new Student();
        $stu->name='李雷';
        $res=$stu->save();
        $id=$stu->attributes['id'];
        dd($stu);
    }
    function actionUpdate(){
        $res=Student::updateAll(['name'=>'韩梅梅'],['id'=>46]);
        dd($res);
    }
    function actionDel(){
       /* $article=Student::find()->where(['id'=>47])->all();
        dd($article);*/
        $res=Article::deleteAll('id>:id',[':id'=>45]);
        dd($res);
    }
    function actionSel(){
        /*$data=Stu_info::find()
            ->select('stu_info.*,stu_depart.name')
            ->leftJoin('stu_depart','stu_info.depart=stu_depart.id')
            ->asArray()
            ->all();*/
        $db=\Yii::$app->db;
        $data=$db->createCommand('select i.*,d.name as dname from stu_info as i LEFT JOIN  stu_depart as d on i.depart=d.id')->queryAll();
        //dd($data);
        return $this->render('index.php',['data'=>$data]);
    }
    function actionHome(){
        $data=\Yii::$app->db->createCommand('select i.*,d.name as dname from stu_info as i LEFT JOIN  stu_depart as d on i.depart=d.id')->queryAll();
        dd($data);
        return $this->renderPartial('index',['data'=>1]);

    }
}