<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 12.10.2016
 * Time: 15:27
 */

namespace app\models;

use yii\base\Model;

class UserForm extends  Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
                [['name', 'email'], 'required'],
                ['email','email'],
        ];
    }

}