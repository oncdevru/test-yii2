<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 12.10.2016
 * Time: 15:27
 */

namespace app\models;

use yii\base\Model;

class Maintext extends  Model
{
    public $text;
    public $quote;
    public $author;

    public function rules()
    {
        return [
            ['text', 'required'],
            ['quote', 'default', 'value'=> null],
            ['author', 'default', 'value'=> null],
        ];
    }

}