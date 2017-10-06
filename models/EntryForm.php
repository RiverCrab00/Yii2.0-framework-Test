<?php
namespace app\models;
use yii;
use yii\base\Model;

class EntryForm extends Model{
    public function rules(){
        return [
            [['name','email'],'required'],
            ['email','eamil'],
        ];
    }

}