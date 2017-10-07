<?php
namespace app\models;

use yii\db\ActiveRecord;

class Stu_depart extends ActiveRecord{
    public function getStudent()
    {
        $stu=$this->hasMany(Stu_info::className(),['depart'=>'id'])->asArray();
        return $stu;
    }
}