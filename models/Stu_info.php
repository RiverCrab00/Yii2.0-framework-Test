<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2017/10/7
 * Time: 12:04
 */
namespace app\models;
use yii\db\ActiveRecord;

class Stu_info extends ActiveRecord{
    public function getStudent()
    {
        $res=$this->hasOne(Stu_depart::className(),['id'=>'depart']);
        return $res;
    }
}